<?php
	namespace AppBundle\Controller;
	
	use FOS\RestBundle\Controller\FOSRestController;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;
	
	class ParcelOrderController extends FOSRestController 
	{
	
		public function postParcelorderAction(Request $request) 
		{
			try 
			{
				/*
				var_dump("new parcel done\n");
				var_dump($request->request->get('parcel'));
				var_dump($request->request->get('sender'));*/
				$newParcel = $this->container->get('parcel_form.handler')->post($request->request->get('parcel'));
				/*var_dump("new parcel done\n");
				$newSender = $this->container->get('addressdata_form.handler')->post($request->request->get('sender'));
				var_dump("new parcel done\n");
				$newReceiver = $this->container->get('addressdata_form.handler')->post($request->request->get('receiver'));
				var_dump("new parcel done\n");
				$newParcelorder = $this->container->get('parcelorder_form.handler')->post($request->request->all());
				var_dump("new parcel done\n");*/
				
				//$routeOptions = array('id' => $newParcelorder->getId(),'_format' => $request->get('_format'));
				//var_dump("new parcel done\n");
				//return $this->routeRedirectView('api_1_get_parcel', $routeOptions, Response::HTTP_CREATED);
			} 
			catch (InvalidFormException $exception) 
			{
				var_dump("new parcel doneexcept\n");
				return array('form' => $exception->getForm());
			}
		}
	}