<head>
    <title><?php echo $lang['mods'] ?></title>
</head>
<div id="content" class="bg-white">
    <h1><?php echo $lang['mods-title'] ?></h1>

    <p><?php echo $lang['mods-p1'] ?></p>
    <p><?php echo $lang['mods-p2'] ?></p>
    <p><?php echo $lang['mods-p3'] ?></p>
    <ul>
        <a href="javascript:toggle('payday2')">
            <h4><?php echo $lang['mods-payday2'] ?><span class="red-link">*</span></h4>

        </a>
        <div id="payday2" style="display:none">
            <ul>
                <a class="red-link" href="mods/payday2/PAYDAY 2.zip" download><?php echo $lang['mods-all'] ?></a>
                <p class="hinweis"><?php echo $lang['mods-payday2-all-size'] ?></p>

                <a href="javascript:toggle('blt')">
                    <h5><?php echo $lang['mods-payday2-1'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="blt" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-1-li1'] ?></li>
                        <a class="red-link" href="mods/payday2/BLT_release_r7_r19" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-1-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('autoweeklysafedropper')">
                    <h5><?php echo $lang['mods-payday2-3'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="autoweeklysafedropper" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-3-li1'] ?></li>
                        <li><?php echo $lang['mods-payday2-3-li2'] ?></li>
                        <a class="red-link" href="mods/payday2/AutoWeeklySafeDropper.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-3-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('blackmarketrevert')">
                    <h5><?php echo $lang['mods-payday2-5'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="blackmarketrevert" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-5-li1'] ?></li>
                        <li><?php echo $lang['mods-payday2-5-li2'] ?></li>
                        <a class="red-link" href="mods/payday2/BlackmarketRevert.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-5-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('botbulletcollisionfixer')">
                    <h5><?php echo $lang['mods-payday2-6'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="botbulletcollisionfixer" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-6-li1'] ?></li>
                        <a class="red-link" href="mods/payday2/Bot Bullet Collision Fixer.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-6-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('buildb')">
                    <h5><?php echo $lang['mods-payday2-7'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="buildb" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-7-li1'] ?></li>
                        <li><?php echo $lang['mods-payday2-7-li2'] ?></li>
                        <a class="red-link" href="mods/payday2/BuilDB.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-7-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('civilianmarkinginstealth')">
                    <h5><?php echo $lang['mods-payday2-9'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="civilianmarkinginstealth" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-9-li1'] ?></li>
                        <li><?php echo $lang['mods-payday2-9-li2'] ?></li>
                        <a class="red-link" href="mods/payday2/Civilian Marking in Stealth.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-9-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('draganddropinventory')">
                    <h5><?php echo $lang['mods-payday2-11'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="draganddropinventory" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-11-li1'] ?></li>
                        <li><?php echo $lang['mods-payday2-11-li2'] ?></li>
                        <a class="red-link" href="mods/payday2/Drag and Drop Inventory.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-11-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('identifyvrplayers')">
                    <h5><?php echo $lang['mods-payday2-15'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="identifyvrplayers" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-15-li1'] ?></li>
                        <li><?php echo $lang['mods-payday2-15-li2'] ?></li>
                        <a class="red-link" href="mods/payday2/Identify VR Players.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-15-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('instantcardflip')">
                    <h5><?php echo $lang['mods-payday2-17'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="instantcardflip" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-17-li1'] ?></li>
                        <li><?php echo $lang['mods-payday2-17-li2'] ?></li>
                        <a class="red-link" href="mods/payday2/Instant Cardflip.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-17-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('inventorychatandplayerstates')">
                    <h5><?php echo $lang['mods-payday2-18'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="inventorychatandplayerstates" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-18-li1'] ?></li>
                        <li><?php echo $lang['mods-payday2-18-li2'] ?></li>
                        <a class="red-link" href="mods/payday2/InventoryChatAndPlayerStates.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-18-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('invertedflashbangglare')">
                    <h5><?php echo $lang['mods-payday2-19'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="invertedflashbangglare" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-19-li1'] ?></li>
                        <li><?php echo $lang['mods-payday2-19-li2'] ?></li>
                        <a class="red-link" href="mods/payday2/InvertedFlashbangGlare.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-19-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('loadingscreeninfo')">
                    <h5><?php echo $lang['mods-payday2-23'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="loadingscreeninfo" style="display:none">
                    <ul>
                        <h5><?php echo $lang['mods-payday2-23-li1'] ?><span class="red-link">*</span></h5>

                        <a class="red-link" href="mods/payday2/LoadingScreenInfo.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-23-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('lobbyplayerinfo')">
                    <h5><?php echo $lang['mods-payday2-25'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="lobbyplayerinfo" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-25-li1'] ?></li>
                        <li><?php echo $lang['mods-payday2-25-li2'] ?></li>
                        <a class="red-link" href="mods/payday2/Lobby Player Info.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-25-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('monkeepers')">
                    <h5><?php echo $lang['mods-payday2-26'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="monkeepers" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-26-li1'] ?></li>
                        <li><?php echo $lang['mods-payday2-26-li2'] ?></li>
                        <li><?php echo $lang['mods-payday2-26-li3'] ?></li>
                        <a class="red-link" href="mods/payday2/Monkeepers.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-26-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('multibuy')">
                    <h5><?php echo $lang['mods-payday2-28'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="multibuy" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-28-li1'] ?></li>
                        <a class="red-link" href="mods/payday2/Multi-Buy.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-28-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('noconfirmdialogs')">
                    <h5><?php echo $lang['mods-payday2-29'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="noconfirmdialogs" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-29-li1'] ?></li>
                        <a class="red-link" href="mods/payday2/No Confirm Dialogs v2.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-29-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('noduplicatedbullets')">
                    <h5><?php echo $lang['mods-payday2-30'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="noduplicatedbullets" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-30-li1'] ?></li>
                        <a class="red-link" href="mods/payday2/No Duplicated Bullets.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-30-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('officialgageshop')">
                    <h5><?php echo $lang['mods-payday2-30'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="officialgageshop" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-31-li1'] ?></li>
                        <li><?php echo $lang['mods-payday2-31-li2'] ?></li>
                        <a class="red-link" href="mods/payday2/Official Gage Shop.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-31-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('quickkeyboardinput')">
                    <h5><?php echo $lang['mods-payday2-32'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="quickkeyboardinput" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-32-li1'] ?></li>
                        <a class="red-link" href="mods/payday2/QuickKeyboardInput.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-32-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('reloadthenrun')">
                    <h5><?php echo $lang['mods-payday2-33'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="reloadthenrun" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-33-li1'] ?></li>
                        <li><?php echo $lang['mods-payday2-33-li2'] ?></li>
                        <a class="red-link" href="mods/payday2/Reload Then Run.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-33-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('renameinventorypages')">
                    <h5><?php echo $lang['mods-payday2-34'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="renameinventorypages" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-34-li1'] ?></li>
                        <li><?php echo $lang['mods-payday2-34-li2'] ?></li>
                        <a class="red-link" href="mods/payday2/Rename Inventory Pages.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-34-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('simplecrosshair')">
                    <h5><?php echo $lang['mods-payday2-35'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="simplecrosshair" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-35-li1'] ?></li>
                        <li><?php echo $lang['mods-payday2-35-li2'] ?></li>
                        <a class="red-link" href="mods/payday2/SimpleCrosshair.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-35-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('steaminventoryinlobby')">
                    <h5><?php echo $lang['mods-payday2-37'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="steaminventoryinlobby" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-37-li1'] ?></li>
                        <a class="red-link" href="mods/payday2/SteamInventoryInLobby.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-37-size'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('wolfhud')">
                    <h5><?php echo $lang['mods-payday2-38'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="wolfhud" style="display:none">
                    <ul>
                        <li><?php echo $lang['mods-payday2-38-li1'] ?></li>
                        <a class="red-link" href="mods/payday2/WolfHUD-master.zip" download><?php echo $lang['mods-download'] ?></a>
                        <p class="hinweis"><?php echo $lang['mods-payday2-38-size'] ?></p>
                    </ul>
                </div>

            </ul>
        </div>
        <a href="javascript:toggle('l4d2')">
            <h4><?php echo $lang['mods-l4d2'] ?><span class="red-link">*</span></h4>

        </a>
        <div id="l4d2" style="display:none">
            <ul>
                <a class="red-link" href="https://steamcommunity.com/id/shurizma/myworkshopfiles/?section=collections&appid=550"><?php echo $lang['mods-all'] ?></a>
                <p><?php echo $lang['mods-l4d2-p1'] ?></p>
                <p><?php echo $lang['mods-l4d2-p2'] ?></p>

                <a href="javascript:toggle('l4d2-chars-1')">
                    <h4><?php echo $lang['mods-l4d2-chars-1'] ?><span class="red-link">*</span></h4>

                </a>
                <div id="l4d2-chars-1" style="display:none">
                    <ul>
                        <a class="red-link" href="https://steamcommunity.com/sharedfiles/filedetails/?id=1810790067"><?php echo $lang['mods-l4d2-collection'] ?></a>
                        <p><?php echo $lang['mods-l4d2-chars-1-p1'] ?></p>
                        <p><?php echo $lang['mods-l4d2-chars-1-p2'] ?></p>
                        <p><?php echo $lang['mods-l4d2-chars-change'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('l4d2-chars-2')">
                    <h4><?php echo $lang['mods-l4d2-chars-2'] ?><span class="red-link">*</span></h4>

                </a>
                <div id="l4d2-chars-2" style="display:none">
                    <ul>
                        <a class="red-link" href="https://steamcommunity.com/sharedfiles/filedetails/?id=1810710640"><?php echo $lang['mods-l4d2-collection'] ?></a>
                        <p><?php echo $lang['mods-l4d2-chars-2-p1'] ?></p>
                        <p><?php echo $lang['mods-l4d2-chars-2-p2'] ?></p>
                        <p><?php echo $lang['mods-l4d2-chars-change'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('l4d2-melee')">
                    <h4><?php echo $lang['mods-l4d2-melee'] ?><span class="red-link">*</span></h4>

                </a>
                <div id="l4d2-melee" style="display:none">
                    <ul>
                        <a class="red-link" href="https://steamcommunity.com/sharedfiles/filedetails/?id=1810712933"><?php echo $lang['mods-l4d2-collection'] ?></a>
                        <p><?php echo $lang['mods-l4d2-melee-p1'] ?></p>
                        <p><?php echo $lang['mods-l4d2-melee-p2'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('l4d2-weapons-1')">
                    <h4><?php echo $lang['mods-l4d2-weapons-1'] ?><span class="red-link">*</span></h4>

                </a>
                <div id="l4d2-weapons-1" style="display:none">
                    <ul>
                        <a class="red-link" href="https://steamcommunity.com/sharedfiles/filedetails/?id=1124637766"><?php echo $lang['mods-l4d2-collection'] ?></a>
                        <p><?php echo $lang['mods-l4d2-weapons-1-p1'] ?></p>
                        <p><?php echo $lang['mods-l4d2-weapons-1-p2'] ?></p>
                        <p><?php echo $lang['mods-l4d2-weapons-change'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('l4d2-weapons-2')">
                    <h4><?php echo $lang['mods-l4d2-weapons-2'] ?><span class="red-link">*</span></h4>

                </a>
                <div id="l4d2-weapons-2" style="display:none">
                    <ul>
                        <a class="red-link" href="https://steamcommunity.com/sharedfiles/filedetails/?id=1124632604"><?php echo $lang['mods-l4d2-collection'] ?></a>
                        <p><?php echo $lang['mods-l4d2-weapons-2-p1'] ?></p>
                        <p><?php echo $lang['mods-l4d2-weapons-2-p2'] ?></p>
                        <p><?php echo $lang['mods-l4d2-weapons-change'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('l4d2-infected')">
                    <h4><?php echo $lang['mods-l4d2-infected'] ?><span class="red-link">*</span></h4>

                </a>
                <div id="l4d2-infected" style="display:none">
                    <ul>
                        <a class="red-link" href="https://steamcommunity.com/sharedfiles/filedetails/?id=1810729694"><?php echo $lang['mods-l4d2-collection'] ?></a>
                        <p><?php echo $lang['mods-l4d2-infected-p1'] ?></p>
                        <p><?php echo $lang['mods-l4d2-infected-p2'] ?></p>
                    </ul>
                </div>

                <a href="javascript:toggle('l4d2-others')">
                    <h4><?php echo $lang['mods-l4d2-others'] ?><span class="red-link">*</span></h4>

                </a>
                <div id="l4d2-others" style="display:none">
                    <ul>
                        <a class="red-link" href="https://steamcommunity.com/sharedfiles/filedetails/?id=1124632350"><?php echo $lang['mods-l4d2-collection'] ?></a>
                        <p><?php echo $lang['mods-l4d2-others-p1'] ?></p>
                        <p><?php echo $lang['mods-l4d2-others-p2'] ?></p>
                    </ul>
                </div>
            </ul>
        </div>
    </ul>
    <p class="hinweis"><span class="red-link">*</span><?php echo $lang['mods-info1'] ?></p>
</div>