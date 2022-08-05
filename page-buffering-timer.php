//This is Willtech's code
/* ************************************************ */
/*                                                  */
/* page-buffering-timer.php                         */
/*                                                  */
/* This file is part of                             */
/* https://github.com/Willtech/pub-utils            */
/* Produced for: pub-utils                          */
/*                                                  */
/* Source Code produced by Willtech 2022            */
/* v0.1 hand coded by HRjJ                          */
/* from an earlier application on willtech.com.au   */
/*                                                  */
/* ************************************************ */
<div align="center"><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size:8px;">(PageGen <?
$tt = number_format(rtrim(sprintf("%.20f", (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'])), "0"),6,'.',',');
if (strpos(($tt."0"), "0") != 0) {
  $tt = number_format($tt,2,'.',',');
}
echo ($tt);
?> Seconds)</span></div>
