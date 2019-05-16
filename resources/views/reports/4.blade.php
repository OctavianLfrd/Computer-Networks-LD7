{{-- Datortīkli
Laboratoriskais darbs 4: intertīkla konfigurēšana
--------------------------------------------------------------------------
Datora numurs: 4.3
Studenti: Alfreds Lapkovskis
Datorvārds: mainframe
Datums: 12.03.2019.
--------------------------------------------------------------------------
1. Tīkla interfeisa konfigurācija:
   - IP adrese: 192.168.4.3 [sudo nano /etc/]
   - apakštīkla maska: 255.255.255.0 [ifconfig]
   - noklusējuma vārtejas (default gateway) IP adrese: 192.168.4.254 [netstat -rn]
   - DNS serveru IP adreses: 127.0.0.1  localhost
        192.168.0.248
        8.8.8.8
        [nano /etc/resolv.conf]

2. Tīkla interfeisa statiskās konfigurācijas uzstādīšanas kārtība:
        iface enp2s11 inet static
        address 192.168.4.3
        netmask 255.255.255.0
        gateway 192.168.4.254
        dns-nameservers 213.175.88.196 8.8.8.8
        auto enp2s11
        [nano /etc/network/interfaces]

3. Tīkla darbspējas pārbaudes komandas:
   - tīkla interfeisa stāvokļa un tekošas konfigurācijas pārbaude:
        [ifconfig]
   - sava apakštīkla datoru pieejamības pārbaude:
        [ping 192.168.1.5]
   - maršrutētāja pārbaude kaimiņ apakštīkla piekļūšanai:
        [traceroute / ping 192.168.4.2]
   - maršrutētāja pārbaude df.rtu apakštīkla piekļūšanai:
        [traceroute / pind df.rtu]
   - maršrutētāja pārbaude Internet saišu piekļūšanai:
        [ping / traceroute google.com, yandex.ru]
   - DNS servera darbspējas pārbaude:
        [nslookup zevs.df.rtu / df.rtu.lv]
   - hosts faila darbspējas pārbaude:
        [nslookup / ping (lokalais dators).politeh.lv]

4. Maršruti līdz saitēm un komandas tos iegūšanai:
   - līdz sava apakštīkla datora:
     - komanda:
        [traceroute mainframe.politeh.lv]
     - maršruts:
        213.175.88.237
   - līdz kaimiņ apakštīkla datora:
     - komanda:
        [traceroute alderamin.politeh.lv]
     - maršruts:
        213.175.88.236
   - līdz df.rtu apakštīkla datora ftp.df.rtu:
     - komanda:
        [tracetoute ftp.df.rtu]
     - maršruts:
        192.168.0.247
   - līdz Interneta saitam ping.lv:
     - komanda:
        [traceroute ping.lv]
     - maršruts:
        82.193.66.66 --}}
