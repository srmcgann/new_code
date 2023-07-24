#!/bin/bash
cd /home/whitehotrobot/code.whitehot.ninja.git
rm -rf /home/whitehotrobot/nameBasedRouting/a
mkdir /home/whitehotrobot/nameBasedRouting/a
rm -rf /home/whitehotrobot/code.whitehot.ninja.git/dist_public
mkdir /home/whitehotrobot/code.whitehot.ninja.git/dist_public
cp /home/whitehotrobot/code.whitehot.ninja.git/dist/. /home/whitehotrobot/code.whitehot.ninja.git/dist_public/. -r
cp /home/whitehotrobot/code.whitehot.ninja.git/dist_public/. /home/whitehotrobot/nameBasedRouting/a/. -r
cd /home/whitehotrobot/nameBasedRouting
chmod 777 . -R
git add .
git commit -m 'sync'
cat ~/github_token
git push origin main
cd /home/whitehotrobot/code.whitehot.ninja.git
