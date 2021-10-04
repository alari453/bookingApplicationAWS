# -*- mode: ruby -*-
# vi: set ft=ruby :

# starting an intance
class Hash
  def slice(*keep_keys)
    h = {}
    keep_keys.each { |key| h[key] = fetch(key) if has_key?(key) }
    h
  end unless Hash.method_defined?(:slice)
  def except(*less_keys)
    slice(*keys - less_keys)
  end unless Hash.method_defined?(:except)
end

# Vagrantfile to set up 2 VMs - client, admin and database servers:
Vagrant.configure("2") do |config|
    # All servers run Ubuntu
    config.vm.box = "ubuntu/xenial64"
    config.vm.boot_timeout = 3200

    # Define clientserver VM
    config.vm.define "clientserver" do |clientserver|
      # Options for the clientserver VM
      clientserver.vm.hostname = "clientserver"
      # For ease of editing as shell commands are in different file
      clientserver.vm.provision "shell", path: "clientserver.sh"
    # End clientserver
    end
  
    # Define adminserver VM
    config.vm.define "adminserver" do |adminserver|
      adminserver.vm.hostname = "adminserver"
      # For ease of editing as shell commands are in different file
      adminserver.vm.provision "shell", path: "adminserver.sh"
    # End adminserver
    end
  
    config.vm.provision "shell", inline: <<-SHELL
      apt-get update
      apt-get install -y apache2 php libapache2-mod-php php-mysql
    SHELL

  end # End Vagrantfile
  