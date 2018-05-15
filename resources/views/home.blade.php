
<!--Header-->
<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <div class="columns">

                <!--Photo-->
                <div class="column is-hidden-mobile is-2-desktop is-3-tablet">
                    <img class="image is-profile" src="img/me.jpg" alt="Joshua Payne">
                </div>

                <!--Info-->
                <div class="column is-4-desktop is-5-tablet">
                    <h1 class="title is-1 has-text-centered">Joshua Payne</h1>
                    <h2 class="subtitle has-text-centered">&#8211; Web Developer &#8211;</h2>
                    <ul class="social has-text-centered">
                        <li>
                            <a href="https://github.com/suxur">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/jlpayne85">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/JoshTheCodeDad">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Content-->
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column">

                <!--About-->
                <div class="box">
                    <p class="title">About</p>
                    <div class="content">
                        <p>Highly driven and passionate self-taught developer of six years who specializes in building web applications in PHP and JavaScript frameworks while always striving to learn and broaden an already extensive skill set. Excellent problem solver, stickler for writing clean code and always looking for efficient ways to refactor and implement new technologies.</p>
                        <blockquote>
                            <p>
                                <em>As a father, husband, code junkie, gamer and minimalist, I believe your work shouldn't define your life but your life should define your work.</em>
                            </p>
                        </blockquote>
                    </div>
                </div>

                <!--Work Experience-->
                <div class="box">
                    <p class="title">Work Experience</p>
                        @each('partials.experience', $experiences, 'experience')
                </div>

            </div>
            <div class="column is-4">

                <!--Education-->
                <div class="box">
                    <p class="title">Education</p>
                    <p><strong>Associate of Arts, General Studies</strong></p>
                    <p>Redlands Community College &#124; 2012</p>
                    <hr>
                    <p><strong>Associate of Science, Recording Arts</strong></p>
                    <p>Full Sail University &#124; 2007</p>
                </div>

                <!--Skills-->
                <div class="box">
                    <p class="title">Skills</p>
                    <div class="content">
                        <table class="table is-narrow">
                            <thead>
                            <tr>
                                <th>PHP Frameworks</th>
                                <th>Servers</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Laravel</td>
                                <td>Apache</td>
                            </tr>
                            <tr>
                                <td>CodeIgniter</td>
                                <td>Nginx</td>
                            </tr>
                            <tr>
                                <td>Symfony</td>
                                <td>MySQL</td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <th>JavaScript Frameworks</th>
                                <th>Environments</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Vue</td>
                                <td>Mac OS</td>
                            </tr>
                            <tr>
                                <td>React</td>
                                <td>Vagrant</td>
                            </tr>
                            <tr>
                                <td>Angular</td>
                                <td>Ubuntu</td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <th>Languages</th>
                                <th>Editors</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>PHP</td>
                                <td>PhpStorm</td>
                            </tr>
                            <tr>
                                <td>HTML &amp; CSS</td>
                                <td>Sublime Text</td>
                            </tr>
                            <tr>
                                <td>JavaScript</td>
                                <td>Vim</td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <th>Tools</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>git</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>sass</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>gulp</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>grunt</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>npm</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>bower</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!--Footer-->
<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                copyright &copy; {{ date('Y') }} &amp; built with <a href="http://bulma.io/">bulma.io</a>
            </p>
            <p>
                <a class="icon" href="https://github.com/suxur">
                    <i class="fa fa-github"></i>
                </a>
            </p>
        </div>
        @guest
            <div class="content has-text-centered">
                <p>
                    <a href="{{ route('login') }}">Login</a>
                </p>
            </div>
        @endguest
    </div>
</footer>
</body>
</html>
