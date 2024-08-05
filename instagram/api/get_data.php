<?php

$baseUrl = 'https://' . $_SERVER['SERVER_NAME'] . '/instagram/';
$page = explode('=', $_SERVER['QUERY_STRING']);
$first = [
    [
        'id' => 1,
        'user' => [
            'id' => 10000,
            'name' => 'alex effron',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211438_10000_mine.jpg',
            $baseUrl . 'images/201912211439_10000_mine.jpg',
            $baseUrl . 'images/201912211440_10000_mine.jpg',
            $baseUrl . 'images/201912211441_10000_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211438_10000_mine.mp4',
            $baseUrl . 'videos/201912211439_10000_mine.mp4',
            $baseUrl . 'videos/201912211440_10000_mine.mp4',
        ],
        'likes' => 75,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'ending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 2,
        'user' => [
            'id' => 10001,
            'name' => 'Smith',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211438_10001_mine.jpg',
            $baseUrl . 'images/201912211439_10001_mine.jpg',
            $baseUrl . 'images/201912211440_10001_mine.jpg',
            $baseUrl . 'images/201912211441_10001_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211438_10001_mine.mp4',
            $baseUrl . 'videos/201912211439_10001_mine.mp4',
            $baseUrl . 'videos/201912211440_10001_mine.mp4',
            $baseUrl . 'videos/201912211441_10001_mine.mp4',
        ],
        'likes' => 456,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 3,
        'user' => [
            'id' => 10002,
            'name' => 'kenin jadvani',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211438_10001_mine.jpg',
            $baseUrl . 'images/201912211439_10001_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211440_10000_mine.mp4',
        ],
        'likes' => 4758,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 4,
        'user' => [
            'id' => 10003,
            'name' => 'Paras sakhvala',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211441_10000_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211439_10000_mine.mp4',
        ],
        'likes' => 10584,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 5,
        'user' => [
            'id' => 10004,
            'name' => 'Jenish jagani',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211440_10001_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211440_10000_mine.mp4'
        ],
        'likes' => 1478,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 6,
        'user' => [
            'id' => 10005,
            'name' => 'Jenish jagani',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211439_10000_mine.jpg',
            $baseUrl . 'images/201912211440_10000_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211439_10000_mine.mp4',
            $baseUrl . 'videos/201912211440_10000_mine.mp4',
        ],
        'likes' => 145,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 7,
        'user' => [
            'id' => 10006,
            'name' => 'Cyndrella Anya',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211439_10000_mine.jpg',
            $baseUrl . 'images/201912211441_10001_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211439_10000_mine.mp4',
            $baseUrl . 'videos/201912211439_10001_mine.mp4',
        ],
        'likes' => 7895,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 8,
        'user' => [
            'id' => 10007,
            'name' => 'Shiva',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211439_10000_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211439_10000_mine.mp4',
        ],
        'likes' => 7895,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 9,
        'user' => [
            'id' => 10008,
            'name' => 'Shiva',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211439_10001_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211438_10001_mine.mp4',
        ],
        'likes' => 7895,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 10,
        'user' => [
            'id' => 10009,
            'name' => 'Alisha',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211441_10000_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211439_10001_mine.mp4',
        ],
        'likes' => 7895,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ]
];

$second = [
    [
        'id' => 11,
        'user' => [
            'id' => 10010,
            'name' => 'alex effron',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211438_10000_mine.jpg',
            $baseUrl . 'images/201912211439_10000_mine.jpg',
            $baseUrl . 'images/201912211440_10000_mine.jpg',
            $baseUrl . 'images/201912211441_10000_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211438_10000_mine.mp4',
            $baseUrl . 'videos/201912211439_10000_mine.mp4',
            $baseUrl . 'videos/201912211440_10000_mine.mp4',
        ],
        'likes' => 75,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'ending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 12,
        'user' => [
            'id' => 10011,
            'name' => 'Smith',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211438_10001_mine.jpg',
            $baseUrl . 'images/201912211439_10001_mine.jpg',
            $baseUrl . 'images/201912211440_10001_mine.jpg',
            $baseUrl . 'images/201912211441_10001_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211438_10001_mine.mp4',
            $baseUrl . 'videos/201912211439_10001_mine.mp4',
            $baseUrl . 'videos/201912211440_10001_mine.mp4',
            $baseUrl . 'videos/201912211441_10001_mine.mp4',
        ],
        'likes' => 456,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 13,
        'user' => [
            'id' => 10012,
            'name' => 'kenin jadvani',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211438_10001_mine.jpg',
            $baseUrl . 'images/201912211439_10001_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211440_10000_mine.mp4',
        ],
        'likes' => 4758,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 14,
        'user' => [
            'id' => 10013,
            'name' => 'Paras sakhvala',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211441_10000_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211439_10000_mine.mp4',
        ],
        'likes' => 10584,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 15,
        'user' => [
            'id' => 10014,
            'name' => 'Jenish jagani',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211440_10001_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211440_10000_mine.mp4'
        ],
        'likes' => 1478,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 16,
        'user' => [
            'id' => 10015,
            'name' => 'Jenish jagani',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211439_10000_mine.jpg',
            $baseUrl . 'images/201912211440_10000_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211439_10000_mine.mp4',
            $baseUrl . 'videos/201912211440_10000_mine.mp4',
        ],
        'likes' => 145,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 17,
        'user' => [
            'id' => 10016,
            'name' => 'Cyndrella Anya',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211439_10000_mine.jpg',
            $baseUrl . 'images/201912211441_10001_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211439_10000_mine.mp4',
            $baseUrl . 'videos/201912211439_10001_mine.mp4',
        ],
        'likes' => 7895,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 18,
        'user' => [
            'id' => 10017,
            'name' => 'Shiva',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211439_10000_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211439_10000_mine.mp4',
        ],
        'likes' => 7895,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 19,
        'user' => [
            'id' => 10018,
            'name' => 'Shiva',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211439_10001_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211438_10001_mine.mp4',
        ],
        'likes' => 7895,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 20,
        'user' => [
            'id' => 10019,
            'name' => 'Alisha',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211441_10000_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211439_10001_mine.mp4',
        ],
        'likes' => 7895,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ]
];

$third = [
    [
        'id' => 21,
        'user' => [
            'id' => 10020,
            'name' => 'alex effron',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211438_10000_mine.jpg',
            $baseUrl . 'images/201912211439_10000_mine.jpg',
            $baseUrl . 'images/201912211440_10000_mine.jpg',
            $baseUrl . 'images/201912211441_10000_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211438_10000_mine.mp4',
            $baseUrl . 'videos/201912211439_10000_mine.mp4',
            $baseUrl . 'videos/201912211440_10000_mine.mp4',
        ],
        'likes' => 75,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'ending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 22,
        'user' => [
            'id' => 10021,
            'name' => 'Smith',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211438_10001_mine.jpg',
            $baseUrl . 'images/201912211439_10001_mine.jpg',
            $baseUrl . 'images/201912211440_10001_mine.jpg',
            $baseUrl . 'images/201912211441_10001_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211438_10001_mine.mp4',
            $baseUrl . 'videos/201912211439_10001_mine.mp4',
            $baseUrl . 'videos/201912211440_10001_mine.mp4',
            $baseUrl . 'videos/201912211441_10001_mine.mp4',
        ],
        'likes' => 456,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 23,
        'user' => [
            'id' => 10022,
            'name' => 'kenin jadvani',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211438_10001_mine.jpg',
            $baseUrl . 'images/201912211439_10001_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211440_10000_mine.mp4',
        ],
        'likes' => 4758,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 24,
        'user' => [
            'id' => 10023,
            'name' => 'Paras sakhvala',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211441_10000_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211439_10000_mine.mp4',
        ],
        'likes' => 10584,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 25,
        'user' => [
            'id' => 10024,
            'name' => 'Jenish jagani',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211440_10001_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211440_10000_mine.mp4'
        ],
        'likes' => 1478,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 26,
        'user' => [
            'id' => 10025,
            'name' => 'Jenish jagani',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211439_10000_mine.jpg',
            $baseUrl . 'images/201912211440_10000_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211439_10000_mine.mp4',
            $baseUrl . 'videos/201912211440_10000_mine.mp4',
        ],
        'likes' => 145,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 27,
        'user' => [
            'id' => 10026,
            'name' => 'Cyndrella Anya',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211439_10000_mine.jpg',
            $baseUrl . 'images/201912211441_10001_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211439_10000_mine.mp4',
            $baseUrl . 'videos/201912211439_10001_mine.mp4',
        ],
        'likes' => 7895,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 28,
        'user' => [
            'id' => 10027,
            'name' => 'Shiva',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211439_10000_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211439_10000_mine.mp4',
        ],
        'likes' => 7895,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 29,
        'user' => [
            'id' => 10028,
            'name' => 'Shiva',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211439_10001_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211438_10001_mine.mp4',
        ],
        'likes' => 7895,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ],
    [
        'id' => 30,
        'user' => [
            'id' => 10029,
            'name' => 'Alisha',
            'profile' => $baseUrl . 'images/10000_profile_image.jpg'
        ],
        'images' => [
            $baseUrl . 'images/201912211441_10000_mine.jpg',
        ],
        'videos' => [
            $baseUrl . 'videos/201912211439_10001_mine.mp4',
        ],
        'likes' => 7895,
        'comments' => [
            'asss, queen! [raised hands emoji]',
            'sending this selfie to NASA, because you\'re a star.',
            'ove you. PS: Can I borrow that top?',
            'hank you for gracing us with this selfie.',
            'ot! [fire emojis]',
            'ou are a goddess.',
            'oman crush every day.',
            'heart eye emoji My best friend is crushing it.',
        ],
        'descriptions' => 'Be happy. It drives people crazy.',
        'hashtags' => '#love #instagood #me #cute #tbt',
        'date_time' => '2019-12-21 14:50:15'
    ]
];

$response = $first;
if (isset($page[1]) && $page[1] == 1) {
    $response = $first;
} else if (isset($page[1]) && $page[1] == 2) {
    $response = $second;
} else if (isset($page[1]) && $page[1] == 3){
    $response = $third;
}
// $response = [
//     'data' => $response
// ];
echo json_encode($response);
?>
