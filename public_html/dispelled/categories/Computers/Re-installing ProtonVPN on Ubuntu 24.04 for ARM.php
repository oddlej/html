<!--date=20241014 -->

<?php include("../../headercat.php"); ?>

<h1>Re-installing ProtonVPN on Ubuntu 24.04 for ARM</h1>

<p>I am using a Khadas Vim3 with an Ubuntu image flashed to eMMC</p>
								
<pre>// be careful with this one the autoremove fucked up protonvpn (Ubuntu 24.04 Arm)

sudo apt-get update && sudo apt-get upgrade && sudo apt-get dist-upgrade && sudo apt-get autoremove && sudo apt-get autoclean

// it removed these
sudo apt install python3-proton-keyring-linux-secretservice
sudo apt install python3-proton-vpn-killswitch-network-manager
sudo apt install python3-proton-vpn-killswitch-network-manager-wireguard
sudo apt install python3-proton-vpn-logger

// how to fix https://protonvpn.com/support/official-linux-vpn-ubuntu/

sudo apt remove pro*

wget https://repo.protonvpn.com/debian/dists/stable/main/binary-all/protonvpn-stable-release_1.0.4_all.deb

sudo dpkg -i ./protonvpn-stable-release_1.0.4_all.deb && sudo apt update

sudo apt install proton-vpn-gnome-desktop

sudo apt update && sudo apt upgrade

// something is misspelled in the repos but it works
</pre>


<?php include("../../footer.php"); ?>
