<div class="row">
    <div class="col-12 w-100">
        <h2 class="display-2 header-color text-center">Network Services Installation</h2>
    </div>
    <div class="col-12">
        <h6 class="header-color text-center">Report 6</h6>
    </div>
</div>
<div class="container row list-font-size">
    <div class="col-6">
        <div class="row">
            <div class="col-md-6 title-color text-md-right title-bold">
                Apache Service
            </div>
            <div class="col-md-6 secondary-list-font-size">
                <div class="title-color">
                    Aims
                </div>
                <div class="common-color">
                    HTTP server for UNIX and Windows operational systems
                </div>
                <div class="title-color">
                    Installation
                </div>
                <div class="common-color">
                    <code>tasksel</code> &rarr; LAMP
                </div>
                <div class="title-color">
                    Status check
                </div>
                <div>
                    <code>service apache2 status</code>
                </div>
                <div class="title-color">
                    Local computer, local network and global Internet connection
                </div>
                <div>
                    <code>http://localhost, http://192.168.4.3, http:// mainframe.politeh.lv</code>
                </div>
            </div>
            <div class="col-md-6 title-color text-md-right title-bold">
                PHP hypertext preprocessor
            </div>
            <div class="col-md-6 secondary-list-font-size">
                <div class="title-color">
                    Aims
                </div>
                <div class="common-color">
                    Programming language to write CGI scripts
                </div>
                <div class="title-color">
                    Installation
                </div>
                <div class="common-color">
                    <code>tasksel</code> &rarr; LAMP
                </div>
                <div class="title-color">
                    Performance check
                </div>
                <div>
                    <code>php -v, php -r "phpinfo();"</code>
                </div>
                <div class="title-color">
                    Co-working with Apache server test
                </div>
                <div class="common-title">
                    Create <code>index.php</code> file in <code>/var/www/html</code> directory
                    and write in <code>&lt;? phpinfo(); ?&gt;</code>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col-md-6 text-md-right title-color title-bold">
                MySQL Service
            </div>
            <div class="col-md-6 secondary-list-font-size">
                <div class="title-color">
                    Aims
                </div>
                <div class="common-color">
                    Object relational database system
                </div>
                <div class="title-color">
                    Installation
                </div>
                <div class="common-color">
                    <code>tasksel</code> &rarr; LAMP
                </div>
                <div class="title-color">
                    Status check
                </div>
                <div>
                    <code>service mysql status</code>
                </div>
            </div>
            <div class="col-md-6 text-md-right title-color title-bold">
                phpMyAdmin Manager
            </div>
            <div class="col-md-6 secondary-list-font-size">
                <div class="title-color">
                    Aims
                </div>
                <div class="common-color">
                    Software for MySQL management
                </div>
                <div class="title-color">
                    Installation
                </div>
                <div>
                    <code>sudo apt-get install phpmyadmin</code>
                </div>
                <div class="title-color">
                    Usage
                </div>
                <div class="common-color">
                    <code>http://localhost</code> &rarr; user: root password: (either no or can be examined
                          during the installation time)
                </div>
            </div>
        </div>
    </div>
</div>
{{--

3. MySQL dienests:
   - mērķi: objektu attiecības datu bāzes sistēma

   - instalācijas kārtība: tasksel => lamp

   - stāvokļa pārbaudes komandas: service mysql status



4. phpMyAdmin menedžeris:
   - mērķi: programmatūra MySql administrēšanai

   - instalācijas kārtība: sudo apt-get install phpmyadmin

   - pielietošanas kārtība: http://localhost/phpmyadmin => user: root,
   password: (nav vai pārbaudēt instalācijas laikā)  --}}
