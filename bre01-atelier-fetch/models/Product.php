<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Product
{
    private ? int $id = null;

    public function __construct(private string $name, private string $description, private string $pictureUrl, private string $pictureAlt, private float $price)
    {

    }


    /**
     * Get the value of id
     *
     * @return  int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param   int  $id  
     *
     */
    public function setId(int $id): void
    {
        $this->id = $id;

    }

    /**
     * Get the value of name
     *
     * @return  string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param   string  $name  
     *
     */
    public function setName(string $name): void
    {
        $this->name = $name;

    }

    /**
     * Get the value of description
     *
     * @return  string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param   string  $description  
     *
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;

    }

    /**
     * Get the value of pictureUrl
     *
     * @return  string
     */
    public function getPictureUrl(): string
    {
        return $this->pictureUrl;
    }

    /**
     * Set the value of pictureUrl
     *
     * @param   string  $pictureUrl  
     *
     */
    public function setPictureUrl($pictureUrl): void
    {
        $this->pictureUrl = $pictureUrl;

    }

    /**
     * Get the value of pictureAlt
     *
     * @return  string
     */
    public function getPictureAlt(): string
    {
        return $this->pictureAlt;
    }

    /**
     * Set the value of pictureAlt
     *
     * @param   string  $pictureAlt  
     *
     */
    public function setPictureAlt($pictureAlt): void
    {
        $this->pictureAlt = $pictureAlt;

    }

    /**
     * Get the value of price
     *
     * @return  float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @param   float  $price  
     *
     */
    public function setPrice($price): void
    {
        $this->price = $price;

    }
    
    public function toArray() : array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "pictureUrl" => $this->pictureUrl,
            "pictureAlt" => $this->pictureAlt,
            "price" => $this->price,
        ];
    }
}