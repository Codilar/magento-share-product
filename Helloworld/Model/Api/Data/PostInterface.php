<?php
namespace Inchoo\Helloworld\Model\Api\Data;
interface PostInterface {
	public function getId();
	public function setId();

	public function getName();
	public function setName();

	public function getPostContent();
	public function setPostContent();
}