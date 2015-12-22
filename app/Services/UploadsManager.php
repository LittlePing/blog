<?
namespace App\Services;

use Carbon\Carbon;
use DflyDev\AapacheMimeType\PhpRepository;
use Illuminate\Support\Facades\Storage;

/**
* 
*/
class UploadsManager
{
	protected $disk;
	protected $mimeDetect;
	function __construct(PhpRepository $memeDetect)
	{
		$this->disk = Storage::disk(config('blog.uploads.storage'));
		$this->mimeDetect = $mimeDetect;
	}

/*
*Return files and directories within a folder
*@param string $folder
*@Return array of[
*	'folder' => 'path to current folder',
*	'folderName' => 'name of just current of folder',
*	'breadCrumbs' => breadcrumb array of [$path => 'foldername']
*	'folders' => array of [$path => $foldername] of each subfolder
*	'files' => array of file details on each file in folder
*
* 	
*]
 */

	public function folderInfo($folder)
	{
		$folder = $this->cleanFolder($folder);

		$breadcrumbs = $this->breadcrumbs($folder);
		$slice = array_slice($breadcrumbs,-1);
		$folderName = current($slice);
		$breadcrumbs = array_slice($breadcrumbs,0,-1);

		$subfolders = [];
		foreach (array_unique($this->disk->directories($folder)) as $subfolder){
			$subfolders["/$subfolder"] = basename($subfolder);
		}


		$files = [];
		foreach($this->disk->files($folder) as $path){
		$files[] = $this->fileDetails($path);

		}

//compact() 函数创建包含变量名和它们的值的数组。
		return compact(
			'folder',
			'folderName',
			'breadcrumbs',
			'subfolders',
			'files'
			);




	}

	/*
		Sanitize the folder name--重载文件名
	 */
	protected function cleanFolder($folder)
	{	//trim() 函数移除字符串两侧的空白字符或其他预定义字符
		return '/'.trim(str_replace('..','',$folder),'/');
	}


	/**
	 * 返回当前目录路径
	 */


	protected function breadcrumbs($folder)
	{
		$folder = trim($folder,'/');
		$crumbs = ['/' => 'root'];

		if(empty($folder)){
			return $crumbs;
		}
		//将字符串folder以/为分隔符打算成为数组
		$folders = explode('/',$folder);
		$build = '';
		foreach($folders as $folder)
		{
			$build = '/'.$folder;
			$crumbs[$build] = $folder;
		}

		return $crumbs;
	}


	/**
	 * 返回文件详细信息的数组
	 */

	protected function fileDetails($path)
	{
		$path = '/' . ltrim($path,'/');

		return [
		'name' => basename($path),
		'fullPath' => $path,
		'webPath' => $this->fileWebpath($path),
		'mimeType' =>$this->fileMimeType($path),
		'size' => $this->fileSize($path),
		'modified' => $this->fileModified($path),

		]
	} 

	/**
	 * 返回文件完整的web路径
	 */

	protected function fileWebpath($path)
	{
		$path = rtirm(config('blog.uploads.webpath'),'/').'/'.ltrim($path,'/');

		return url($path);
	}


	/**
	 * 返回文件大小
	 */

	public function fileSize($path)
	{
		return $this->disk->size($path);
	}


	/**
	 * 返回文件的MIME类型
	 */

	public function fileMimeType($path)
	{
		return $this->mimeDetect->findType(
			pathinfo($path,PATHINFO_EXTENSION)
			);
	}


	public function fileModified($path)
	{

		return Carbon::createFromTimestamp(
			$this->disk->lastModified($path)
			);

	}



}
