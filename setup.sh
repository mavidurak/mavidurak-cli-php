#!/usr/bin/bash
path=${PWD}
#sudo ln -s $path/mavidurak.php /usr/bin/mavidurak
sudo cp ./mavidurak.php /usr/bin/mavidurak
sudo chmod +x /usr/bin/mavidurak
echo "Installation completed."