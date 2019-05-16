{{-- Atskaite
===========================================================
Datora numurs: 4.3
Students: Alfreds Lapkovskis
Datorvards: mainframe
Datums: 12.02.2019.
===========================================================
1. Informacija par datoru:
   datorvards: mainframe, cmd: hostname
   lietotaja vards: alfred, cmd: whoami
   processors: AMDAthlon 32bit, cmd: lshw
   RAM kopigais apjoms: 1022560KB, cmd: free (vai lshw)
   RAM brivais apjoms: 528116KB, cms: free (vai lshw)
   HDD kopigais izmers: 40GB, cmd: lshw
   HDD brivais apjoms: 37GB, cmd: lshw
   tikla karte: VT6102/VT6103 [Rhine-II], cmd: lshw
   videokarte: NVIDIA NV34 GeForce FX5200 32bit, cmd: lshw
2. Fails adins:
   izveidosana: cmd: nano
   tiesibu iestadisana: chmod 444 adminis
3. Lietotaja guest izveidosana: cmd: adduser guest
4. Kataloga reports izveidosana: cmd: mkdir reports --}}
<div class="row">
    <div class="col-12">
        <h2 class="display-2 header-color text-center">Ubuntu Console</h2>
    </div>
    <div class="col-12">
        <h6 class="header-color text-center">Report 2</h6>
    </div>
</div>
<div class="row list-font-size">
    <div class="col-md-6 title-color text-md-right title-bold">
        Info about computer
    </div>
    <div class="col-md-6 secondary-list-font-size">
        <div class="w-100 title-color">
            Computer name
        </div>
        <div class="common-color">
            mainframe (cmd: <code>hostname</code>)
        </div>
        <div class="title-color">
            Username
        </div>
        <div class="common-color">
            alfred (cmd: <code>whoami</code>)
        </div>
        <div class="title-color">
            Processor
        </div>
        <div class="common-text">
            AMDAthlon 32bit (cmd: <code>lshw</code>)
        </div>
        <div class="title-color">
            Full RAM capacity
        </div>
        <div class="common-text">
            1022560KB (cmd: <code>free</code>)
        </div>
        <div class="title-color">
            Free RAM capacity
        </div>
        <div class="common-text">
            528116KB (cmd: <code>free</code>)
        </div>
        <div class="title-color">
            Full HDD capacity
        </div>
        <div class="common-text">
            40GB (cmd: <code>lshw</code>)
        </div>
        <div class="title-color">
            Free HDD capacity
        </div>
        <div class="common-text">
            37GB (cmd: <code>lshw</code>)
        </div>
        <div class="itle-color">
            Network Adapter
        </div>
        <div class="common-text">
            VT6102/VT6103 [Rhine-II] (cmd: <code>lshw</code>)
        </div>
        <div class="title-color">
            Video adapter
        </div>
        <div class="common-text">
            NVIDIA NV34 GeForce FX5200 32bit (cmd: <code>lshw</code>)
        </div>
    </div>
    <div class="col-md-6 title-color text-md-right title-bold">
        "Admins" file producing
    </div>
    <div class="col-md-6 secondary-list-font-size">
        <div class="title-color">
            Creating
        </div>
        <code>
            nano
        </code>
        <div class="title-color">
            Assigning rights
        </div>
        <code>
            chmod 444 admins
        </code>
    </div>
    <div class="col-md-6 title-color text-md-right title-bold">
        Creating a user "guest"
    </div>
    <code>
        adduser guest
    </code>
    <div class="col-md-6 title-color text-md-right title-bold">
        Creating reports catalogues
    </div>
    <div>
        Creating useraccount
    </div>
    <code>mkdir reports</code>
</div>
