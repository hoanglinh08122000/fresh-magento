<?php
//
//namespace Dtn\Custom\Model;
//
//use Magento\Framework\Exception\FileSystemException;
//use Magento\Framework\Exception\NoSuchEntityException;
//
//class ImageUploader
//{
//    private $coreFileStorageDatabase;
//    private $mediaDirectory;
//    private $uploaderFactory;
//    private $storeManager;
//    private $logger;
//    public $baseTmpPath;
//    public $basePath;
//    public $allowedExtensions;
//
//    public function __construct(
//        \Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDatabase,
//        \Magento\Framework\Filesystem $filesystem,
//        \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory,
//        \Magento\Store\Model\StoreManagerInterface $storeManager,
//        \Psr\Log\LoggerInterface $logger
//    ) {
//        $this->coreFileStorageDatabase = $coreFileStorageDatabase;
//        try {
//            $this->mediaDirectory = $filesystem->getDirectoryWrite(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA);
//        } catch (FileSystemException $e) {
//        }
//        $this->uploaderFactory = $uploaderFactory;
//        $this->storeManager = $storeManager;
//        $this->logger = $logger;
//        $this->baseTmpPath = "dtn/tmp/office";
//        $this->basePath = "dtn/office";
//        $this->allowedExtensions= ['jpg', 'jpeg', 'gif', 'png'];
//    }
//
//    public function setBaseTmpPath($baseTmpPath)
//    {
//        $this->baseTmpPath = $baseTmpPath;
//    }
//
//    public function setBasePath($basePath)
//    {
//        $this->basePath = $basePath;
//    }
//
//    public function setAllowedExtensions($allowedExtensions)
//    {
//        $this->allowedExtensions = $allowedExtensions;
//    }
//
//    public function getBaseTmpPath()
//    {
//        return $this->baseTmpPath;
//    }
//
//    public function getBasePath()
//    {
//        return $this->basePath;
//    }
//
//    public function getAllowedExtensions()
//    {
//        return $this->allowedExtensions;
//    }
//
//    public function getFilePath($path, $imageName)
//    {
//        return rtrim($path, '/') . '/' . ltrim($imageName, '/');
//    }
//
//    public function moveFileFromTmp($imageName)
//    {
//        $baseTmpPath = $this->getBaseTmpPath();
//        $basePath = $this->getBasePath();
//        $baseImagePath = $this->getFilePath($basePath, $imageName);
//        $baseTmpImagePath = $this->getFilePath($baseTmpPath, $imageName);
//        try {
//            $this->coreFileStorageDatabase->copyFile(
//                $baseTmpImagePath,
//                $baseImagePath
//            );
//            $this->mediaDirectory->renameFile(
//                $baseTmpImagePath,
//                $baseImagePath
//            );
//        } catch (\Exception $e) {
//            throw new \Magento\Framework\Exception\LocalizedException(
//                __('Something went wrong while saving the file(s).')
//            );
//        }
//        return $imageName;
//    }
//
//    public function saveFileToTmpDir($fileId)
//    {
//        $baseTmpPath = $this->getBaseTmpPath();
//        $uploader = $this->uploaderFactory->create(['fileId' => $fileId]);
//        $uploader->setAllowedExtensions($this->getAllowedExtensions());
//        $uploader->setAllowRenameFiles(true);
//        try {
//            $result = $uploader->save($this->mediaDirectory->getAbsolutePath($baseTmpPath));
//            if (!$result) {
//                throw new \Magento\Framework\Exception\LocalizedException(
//                    __('File can not be saved to the destination folder.')
//                );
//            }
//        } catch (\Exception $e) {
//        }
//        $result['tmp_name'] = str_replace('\\', '/', $result['tmp_name']);
//        $result['path'] = str_replace('\\', '/', $result['path']);
//        try {
//            $result['url'] = $this->storeManager
//                    ->getStore()
//                    ->getBaseUrl(
//                        \Magento\Framework\UrlInterface::URL_TYPE_MEDIA
//                    ) . $this->getFilePath($baseTmpPath, $result['file']);
//        } catch (NoSuchEntityException $e) {
//        }
//        $result['name'] = $result['file'];
//        if (isset($result['file'])) {
//            try {
//                $relativePath = rtrim($baseTmpPath, '/') . '/' . ltrim($result['file'], '/');
//                $this->coreFileStorageDatabase->saveFile($relativePath);
//            } catch (\Exception $e) {
//                $this->logger->critical($e);
//                throw new \Magento\Framework\Exception\LocalizedException(
//                    __('Something went wrong while saving the file(s).')
//                );
//            }
//        }
//        return $result;
//    }
//}
