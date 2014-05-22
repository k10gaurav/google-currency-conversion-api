<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('currency_to_usd'))
{
	function currency_to_usd($amount)
	{	
		$from_Currency='USD';
		$to_Currency='INR';
		$amt='100';

		$link="http://www.google.com/finance/converter?a=$amt&from=$from_Currency&to=$to_Currency";
		$output=file_get_contents($link);
		$xpath = new DOMXPath( @DOMDocument::loadHTML($output) ) ;
		$domElementB = $xpath->evaluate("//span[@class='bld']")->item(0) ;
		$currHtml = $domElementB->ownerDocument->saveXML($domElementB) ;
		echo $currHtml;
	}
}