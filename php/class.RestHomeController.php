<?php
class RestHomeController extends RestSiteController
	{
	static $ctrInf;
	function __construct(RestRequest $request)
		{
		parent::__construct($request);
		}
	}
RestHomeController::$ctrInf=new stdClass();
RestHomeController::$ctrInf->description='Home';

