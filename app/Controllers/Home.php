<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $data = [];
    protected $assetsLocation = '/assets/template/';
    public function index()
    {
        $this->data = [
            'asset_path' => $this->assetsLocation,
            'home' => [
                'title' => 'Being an artist',
                'summary' => 'Art Studio from Asia passionated in creativity since 2018',
                'button-icon' => 'fa fa-angle-double-down',
                'button-link' => '#about',
            ],
            'about' => [
                [
                    'position' => 'left',
                    'class' => 'col-md-4 col-sm-8',
                    'image' => 'images/about-image.jpg',
                    'title' => 'Interested to Work?',
                    'summary' => 'Sed varius augue nec pharetra scelerisque. Maecenas sapien ex, rutrum sit amet dapibus eu, tincidunt vitae nulla.',
                    'link' => anchor('#', 'hello@company.com'),
                ],
                [
                    'position' => 'right',
                    'class' => 'col-md-8 col-sm-12',
                    'subtitle' => 'we make things better',
                    'title' => 'Curabitur tristique ante non malesuada dignissim',
                    'summary' => 'Credit goes to <a href="#"><b>Unsplash</b></a> for images used in this artist web page. Please tell your friends about <a rel="nofollow" href="http://tooplate.com" target="_parent">Tooplate</a> website. You can feel free to use this template as you wish. Fusce quis fermentum enim, at rutrum enim. Sed tellus metus, laoreet eu turpis vel, sollicitudin feugiat libero. Ut ligula augue, condimentum a purus hendrerit, suscipit vehicula dui. Sed non purus purus. Mauris nunc lectus, porta pellentesque nisl nec, porttitor ultricies purus.',
                ]
            ],
            'work' => [
                'title' => 'Work Collection',
                'summary' => 'Morbi sit amet erat ullamcorper, varius erat at, vehicula massa. Phasellus vel vestibulum purus. Sed id sollicitudin ex, id eleifend purus. Nulla id fermentum nisl, vel tincidunt orci. Curabitur tristique ante non malesuada dignissim. Pellentesque id odio vitae enim efficitur ornare a non metus.',
                'images' => [
                    ['link' => 'images/work-1.jpg', 'name' => 'Fine Arts'],
                    ['link' => 'images/work-2.jpg', 'name' => 'Logo Design'],
                    ['link' => 'images/work-3.jpg', 'name' => 'Photography'],
                    ['link' => 'images/work-4.jpg', 'name' => 'Cinematography'],
                ],
            ],
            'contact' => [
                'title' => 'Get in touch',
                'summary' => 'Quisque lobortis nibh eu nisi sodales gravida. Sed vehicula mauris in orci vehicula, at luctus mauris hendrerit. Fusce aliquet quis ante ac pretium. Donec quis nibh sed elit rhoncus condimentum.',
            ],
            'footer' => [
                'title' => 'Artist Digital Studio',
                'summary' => 'Curabitur quis volutpat elit. Proin sed sagittis arcu, non tristique libero. Quisque lobortis nibh eu nisi sodales gravida.',
                'copyright-text' => 'Copyright © 2023 Simpletine',
                'support' => [
                    [
                        'string' => [
                            '<h4>Reach Out</h4>',
                            '<p>456 Old Street, New City, ASIA</p>',
                        ]
                    ],
                    [
                        'string' => [
                            '<h4>Contact Info</h4>',
                            '<p>' . anchor('#', 'hello@company.com') . '</p>',
                            '<p>Tel: 010-020-0890</p>',
                        ]
                    ],
                ],
                'socials' => [
                    ['link' => '#', 'icon' => 'fa fa-facebook'],
                    ['link' => '#', 'icon' => 'fa fa-twitter'],
                    ['link' => '#', 'icon' => 'fa fa-instagram'],
                    ['link' => '#', 'icon' => 'fa fa-behance'],
                    ['link' => '#', 'icon' => 'fa fa-github'],
                ],
            ],
        ];
        return view('index', $this->data);
    }
}
