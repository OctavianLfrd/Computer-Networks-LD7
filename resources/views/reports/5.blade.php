<div class="row">
    <div class="col-12">
        <h2 class="display-2 header-color text-center">Network Services Installation</h2>
    </div>
    <div class="col-12">
        <h6 class="header-color text-center">Report 5</h6>
    </div>
</div>
<div class="row list-font-size">
    <div class="col-4">
        <div class="row">
            <div class="col-md-6 title-color text-md-right title-bold">
                SSH Service
            </div>
            <div class="col-md-6 secondary-list-font-size">
                <div class="title-color">
                    Aims
                </div>
                <div class="common-color">
                    Remote command line access and commands execution
                </div>
                <div class="title-color">
                    Installation
                </div>
                <div>
                    <code>sudo apt-get install sshd</code>
                </div>
                <div class="title-color">
                    Status check
                </div>
                <div>
                    <code>service sshd status</code>
                </div>
                <div class="title-color">
                    Banner creation
                </div>
                <div class="common-color">
                    <code>nano /etc/ssh/sshd_config</code> &rarr; Banner *banner link*
                </div>
                <div class="title-color">
                    Local computer, local network and global Internet connection
                </div>
                <div>
                    <code>ssh [localhost, 192.168.4.3, mainframe.politeh.lv]</code>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="row">
            <div class="col-md-6 title-color text-md-right title-bold">
                FTP Service
            </div>
            <div class="col-md-6 secondary-list-font-size">
                <div class="title-color">
                    Aims
                </div>
                <div class="common-color">
                    File transferring between computers
                </div>
                <div class="title-color">
                    Installation
                </div>
                <div>
                    <code>sudo apt-get install vsftpd</code>
                </div>
                <div class="title-color">
                    Status check
                </div>
                <div>
                    <code>service vsftpd status</code>
                </div>
                <div class="title-color">
                    Local computer, local network and global Internet connection
                </div>
                <div>
                    <code>ftp [localhost, 192.168.4.3, mainframe.politeh.lv]</code>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="row">
            <div class="col-md-6 title-color text-md-right title-bold">
                SAMBA Service
            </div>
            <div class="col-md-6 secondary-list-font-size">
                <div class="title-color">
                    Aims
                </div>
                <div class="common-color">
                    In our case, mounting local directories to Windows server resources
                </div>
                <div class="title-color">
                    Installation
                </div>
                <div>
                    <code>sudo apt-get cifs-utils</code>
                </div>
                <div class="title-color">
                    Connection to shared resources
                </div>
                <div>
                    <code>cd /mnt/[studnet, common]</code>
                </div>
                <div class="title-color">
                    Permanent connection to shared resources organization
                </div>
                <div class="common-color">
                    <strong>1. </strong><code>cd /etc/fstab</code> &rarr; //hera.df.rtu/StudNet /mnt/studnet cifs _netdev,user=ddb001,guest<br>
                    <strong>2. </strong><code>cd /etc/fstab</code> &rarr; //zevs.df.rtu/common /mnt/common cifs _netdev,user=ddb001,guest<br>
                    <strong>3. </strong><code>sudo mount --all</code>
                </div>
            </div>
        </div>
    </div>
</div>
