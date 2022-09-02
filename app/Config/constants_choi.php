<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') or define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  or define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') or define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   or define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  or define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           or define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     or define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       or define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  or define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   or define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              or define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            or define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       or define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        or define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          or define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         or define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   or define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  or define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') or define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     or define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       or define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      or define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      or define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

// define('globalvariable', 'Contoh Global Variabel'); //cara panggilnya conth: print_r(globalvariable)

// development
// define('url_getDataCore', 'http://172.16.3.209/MidCore/APIcore.asmx/GetCIFinfo');
// define('url_getDataEKTP', 'http://172.16.3.209/APIeKTP/wsKTP.asmx/GetDataEKTP');
// define('url_getDataBankTujuan', 'http://172.16.3.198:6614/emq/bankbyCurrency');
// define('url_getDataMataUang', 'http://172.16.3.198:6614/emq/listCurrencies');
// define('url_getDataRemittance', 'http://172.16.3.198:6614/emq/remittance');
// define('url_getDataSourceFunds', 'http://172.16.3.198:6614/emq/sourcesFunds');
// define('url_getDataRelationship', 'http://172.16.3.198:6614/emq/relationships');
define('iv', '0123456789ABCDEF');
define('key', 'BtNT3sting012345BtNT3sting012345');
define('url_callpgmaddbo', 'http://172.16.3.198:2209/api/bo/callpgmaddbo');
define('header_id', 'id: BTNBO');
define('header_key', 'key: BtNTT3sting');


define('POST_ID_PROD', 'id: BTNESPM');
define('POST_KEY_PROD', 'key: 6325ec7eaa484c1e89822f9e1f28667c');
define('URL_API_PROD', 'http://10.255.0.24:6618/');

define('POST_ID_DEV', 'id: BTNESPM');
define('POST_KEY_DEV', 'key: mxp1twxPQeRuroO0IaQaVoCF2S49BQa5');
define('URL_API_DEV', 'http://172.16.3.198:6618/');


// production
// define('url_getDataCore', 'http://172.15.2.204/MidCore/APIcore.asmx/GetCIFinfo');
// define('url_getDataEKTP', 'http://172.16.3.209/APIeKTP/wsKTP.asmx/GetDataEKTP');
// define('iv', 'CD8F71EB94D50FAA');
// define('key', 'ZckmiKLWBRbpdrM0ZwyVbFqqqoAy9Tca');
// define('url_callpgmaddbo', 'http://172.15.1.24:2209/api/bo/callpgmaddbo');
// define('header_id', 'id: BTNBO');
// define('header_key', 'key: sO8FKRzKFmVs9oRfGHXvdXvCxBLUZouT');

//upload path
define('PATH_UMTARIK', 'C:\\SOURCE\\dokumenespm\\umtarik\\');
define('PATH_SPM', 'C:\\SOURCE\\dokumenespm\\spm\\');
define('PATH_UPLOAD', './uploads/');
