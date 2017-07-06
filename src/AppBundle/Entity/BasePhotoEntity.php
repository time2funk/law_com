<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class BasePhotoEntity extends BaseEntity
{
    const UPLOAD_DIR_NAME = 'uploads';

    protected $subfolder = '';


    /**
     * Unmapped property to handle file uploads
     */
    protected $photo;

    /**
     * @ORM\Column(name="filename", type="string", length=255,  nullable=true)
     */
    protected $filename;

    public function getPhotoFullPath()
    {
        $pathToFile = self::UPLOAD_DIR_NAME . "/";
        if (!empty($this->subfolder)) {
            $pathToFile .= $this->subfolder . "/";
        }

        if (empty($this->getFilename())) {
            return null;
        }

        return $pathToFile . $this->getFilename();
    }

    /**
     * Lifecycle callback to upload the file to the server
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function lifecycleFileUpload()
    {
        if (null !== $this->getPhoto()) {

            $filename = $this->getPhoto()->getClientOriginalName();
            $this->setFilename($filename);

            $this->getPhoto()->move(
                $this->getUploadRootDir(),
                $filename
            );

            $this->setFilename($filename);
            $this->setPhoto(null);
        }
    }

    /**
     * Get upload root dir
     */
    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        $uploadDir = __DIR__ . '/../../../web/' . self::UPLOAD_DIR_NAME;
        if (!empty($this->subfolder)) {
            $uploadDir .= DIRECTORY_SEPARATOR . $this->subfolder;
        }
        return $uploadDir;
    }

    /**
     * Set photo
     *
     * @param UploadedFile $photo
     */
    public function setPhoto(UploadedFile $photo = null)
    {
        $this->photo = $photo;
    }

    /**
     * Get photo
     *
     * @return UploadedFile
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return Attorney
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }
}