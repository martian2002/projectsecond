


<?

session_start();



$route =  isset($_GET['route']) ? $_GET['route'] : 'main';

include_once './includes/db.php';
$userInfo = userInfo();

$today = date("F"); 

if($today == 'July'){
    $test = 'Июль';
}

$arrayPages = [
    
    'main'       => [ 'page_name'  => 'main',
                      'page_title' => 'Главная',
                      'page_icon'  => 'fa-home'
                    ],
    'contact'    => [ 'page_name'  => 'contact',
                      'page_title' => 'Контакты',
                      'page_icon'  => 'fa-address-book'
                    ],
    'table'       => [ 'page_name'   => 'table',
                       'page_title'  => 'Таблица умножения',
                       'page_icon'   => 'fa-times'
                     ],
                     
    'calc'        => [ 'page_name'   => 'calc',
                       'page_title'  => 'Калькулятор',
                       'page_icon'   => 'fa-calculator-alt'
                     ],
                     
    'slide'       => [ 'page_name'   => 'slide',
                       'page_title'  => 'Слайдер',
                       'page_icon'   => 'fa-presentation'
                     ],
                     
    'guest'       => [ 'page_name'   => 'guest',
                       'page_title'  => 'Гостевая книга',
                       'page_icon'   => 'fa-books'
                     ],
                     
    'test'        => [ 'page_name'   => 'test',
                       'page_title'  => 'Тест',
                       'page_icon'   => 'fa-vial'
                     ],
                 
]



?>