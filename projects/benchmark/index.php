<?php
/**
 * @filesource projects/benchmark/index.php.
 *
 * @author Goragod Wiriya <admin@goragod.com>
 * @link http://www.kotchasan.com/
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 */
// ตัวแปรที่จำเป็นสำหรับ Framework ใช้ระบุ root folder
define('APP_PATH', dirname(__FILE__).'/');
/**
 * 0 (default )บันทึกข้อผิดพลาดร้ายแรงลง error_log .php
 * 1 บันทึกข้อผิดพลาดและคำเตือนลง error_log .php
 * 2 แสดงผลข้อผิดพลาดและคำเตือนออกทางหน้าจอ (ใช้เฉพาะตอนออกแบบเท่านั้น)
 */
//define('DEBUG', 0);
/**
 * false (default)
 * true บันทึกการ query ฐานข้อมูลลง log (ใช้เฉพาะตอนออกแบบเท่านั้น)
 */
//define('DB_LOG', false);
// load Kotchasan
include APP_PATH.'../../Kotchasan/load.php';
// inint Kotchasan Framework
Kotchasan::createWebApplication()->run();
printf(
"\n%' 8d:%f", memory_get_peak_usage(true), microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']
);
