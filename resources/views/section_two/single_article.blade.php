@extends('layouts.app_two')

@section('content')

<div class="col-md-9">
    <div class="row articles-wrapper">
        <div class="col-md-12 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="articles.html">Topic</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Read</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="page-wrapper">
                <div class="heading">
                    <h2 class="title">Topic Title here</h2>
                </div>
                <div class="metadata">
                    <div class="info date">
                        <i class="far fa-calendar-alt"></i> 25/05/2018</div>
                    <div class="info category">
                        <a href="#">
                            <i class="fas fa-folder-open"></i> Some Topic</a>
                    </div>
                    <div class="info comments">
                        <a href="#">
                            <i class="fas fa-comments"></i> 4 Comments</a>
                    </div>
                </div>
                <div class="body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet finibus dui. Fusce ac nulla nec ex ornare vehicula
                        non nec mi. Cras eget nisi sem. Cum sociis natoque penatibus et magnis dis parturient
                        montes, nascetur ridiculus mus. Donec viverra faucibus magna sed interdum. Phasellus
                        ultrices sagittis molestie. Sed sit amet nisl id risus egestas semper. In porta,
                        arcu eu dignissim vestibulum, sapien justo imperdiet enim, sed facilisis quam
                        justo in neque. Aliquam fermentum arcu eget hendrerit efficitur.
                    </p>
                    <p>
                        Phasellus tempor justo id urna congue tempor. In ut porta ex. Nullam mi orci, volutpat ut placerat eget, feugiat id sem.
                        Morbi porta, magna in molestie dignissim, metus neque pellentesque nibh, eget
                        fermentum nunc ipsum eu ligula. Duis ultricies magna erat, elementum tempus mi
                        faucibus vel. Nullam luctus sem nec ipsum venenatis, id feugiat ipsum mollis.
                        Sed vel velit vel metus scelerisque hendrerit quis et libero. Duis non lectus
                        mi. Fusce mollis dui ut nunc semper, ut iaculis tellus vestibulum. Etiam placerat
                        nibh et luctus fermentum. Vestibulum ac sagittis erat. Quisque tempor felis nisl,
                        et fringilla nibh viverra ac. Nulla ac aliquam orci.
                    </p>

                    <hr>


                    <p>
                        Sed elit ipsum, porta sed ex sit amet, fermentum viverra nulla. Nullam cursus tincidunt elit, vel hendrerit diam scelerisque
                        non. Nulla finibus hendrerit libero, consequat iaculis enim interdum commodo.
                        Nulla ultrices, dolor id congue ornare, lorem ex porta magna, et elementum leo
                        augue id felis. Donec ullamcorper nisi quis dui bibendum gravida. Nulla facilisi.
                        Pellentesque a dolor quam. Sed interdum auctor ante, id auctor sem imperdiet
                        in. Pellentesque et posuere turpis, ac vestibulum dui.
                    </p>
                    <p>
                        Nulla rhoncus dolor sit amet mi euismod molestie. Mauris velit nisi, vestibulum sagittis pharetra ut, fermentum vitae magna.
                        Aliquam ut dolor a est molestie fringilla. Mauris at dui volutpat, tincidunt
                        arcu in, semper neque. Aenean sodales venenatis semper. Praesent tincidunt dapibus
                        diam. Morbi pellentesque justo at interdum vestibulum. Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="tags">
                    <span class="badge badge-pill badge-primary">material design</span>
                    <span class="badge badge-pill badge-primary">knowledge base</span>
                    <span class="badge badge-pill badge-primary">template</span>
                </div>
                <div class="comments">
                    <div class="comments-heading">
                        <h4>
                            <i class="fas fa-comments"></i> Comments</h4>
                    </div>
                    <div class="comments-body">
                        <div class="comment">
                            <img src="https://i1.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100" class="user-image">
                            <div class="user-comment">
                                <textarea rows="5" class="form-control" placeholder="Start typing to comment..."></textarea>
                                <button class="btn btn-secondary float-right mt-3">Submit Comment</button>
                            </div>
                        </div>
                        <div class="comment">
                            <img src="https://i1.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100" class="user-image">
                            <div class="user-comment">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt
                                voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo
                                veniam fuga corporis totam reprehenderit quasi sapiente modi tempora
                                at perspiciatis mollitia, dolores voluptate. Cumque, corrupti?
                                <div class="user-comment-options">
                                    <a class="btn btn-secondary float-left">25/05/2018 12:00</a>
                                    <a class="btn btn-secondary float-right">
                                        Reply
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <img src="https://i1.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100" class="user-image">
                            <div class="user-comment">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt
                                voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo
                                veniam fuga corporis totam reprehenderit quasi sapiente modi tempora
                                at perspiciatis mollitia, dolores voluptate. Cumque, corrupti?
                                <div class="user-comment-options">
                                    <a class="btn btn-secondary float-left">25/05/2018 12:00</a>
                                    <a class="btn btn-secondary float-right">
                                        Reply
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <img src="https://i1.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100" class="user-image">
                            <div class="user-comment">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt
                                voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo
                                veniam fuga corporis totam reprehenderit quasi sapiente modi tempora
                                at perspiciatis mollitia, dolores voluptate. Cumque, corrupti?
                                <div class="user-comment-options">
                                    <a class="btn btn-secondary float-left">25/05/2018 12:00</a>
                                    <a class="btn btn-secondary float-right">
                                        Reply
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <img src="https://i1.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100" class="user-image">
                            <div class="user-comment">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt
                                voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo
                                veniam fuga corporis totam reprehenderit quasi sapiente modi tempora
                                at perspiciatis mollitia, dolores voluptate. Cumque, corrupti?
                                <div class="user-comment-options">
                                    <a class="btn btn-secondary float-left">25/05/2018 12:00</a>
                                    <a class="btn btn-secondary float-right">
                                        Reply
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




