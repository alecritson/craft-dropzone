<?php
namespace Craft;

class DropzoneController extends BaseController
{

	public function actionUpload()
	{

		$input = craft()->request->getPost();

		$file = UploadedFile::getInstanceByName('file');

		$folder = craft()->assets->findFolder(array(
		    'sourceId' => $input['sourceId']
		));

		craft()->assets->insertFileByLocalPath(
		    $file->getTempName(),
		    $file->getName(),
		    $folder->id,
		    AssetConflictResolution::KeepBoth);

		// DropzonePlugin::log($file->getName(), LogLevel::Info);
		craft()->end();
	}
	public function poop($nugget = '')
	{
		Craft::dump($nugget);
		craft()->end();
	}
}
