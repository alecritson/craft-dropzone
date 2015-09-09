<?php
namespace Craft;

class DropzoneController extends BaseController
{

	/**
	 * Action to upload a file to an asset
	 * @return void Request ends
	 */
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
}
