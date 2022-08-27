Vagrant.configure("2") do |config|
  config.vm.box = "generic/ubuntu2204"
  config.vm.box_check_update = true

  config.vm.network "private_network", ip: "192.168.2.2"
  config.ssh.insert_key = "true"

  config.ssh.username = 'vagrant'
  config.ssh.password = 'vagrant'

  config.vm.provider "virtualbox" do |vb|
      vb.gui = false
      vb.memory = 4096
      vb.cpus = 4
  end

  config.vm.provision "shell", inline: <<-SHELL
  wget 'https://raw.githubusercontent.com/KentVejrupMadsen/Portfolio/development/scripts/processes/install.sh' -O './install.sh'
  bash ./install.sh
  SHELL
end
