<head>
    <title><?php echo $lang['speccs'] ?></title>
</head>

<div id="content" class="bg-white">
    <h1><?php echo $lang['speccs-title'] ?></h1>
    <p><?php echo $lang['speccs-p1'] ?></p>
    <p><?php echo $lang['speccs-p2'] ?></p>
    <p><?php echo $lang['speccs-p3'] ?></p>
    <ul>
        <a href="javascript:toggle('operating-system')">
            <h4><?php echo $lang['speccs-os'] ?></h4>
        </a>
        <div id="operating-system" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['speccs-os-li1'] ?></li>
                </ul>
            </ul>
        </div>

        <a href="javascript:toggle('cpu-prozessor')">
            <h4><?php echo $lang['speccs-cpu'] ?></h4>
        </a>
        <div id="cpu-prozessor" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['speccs-cpu-li1'] ?></li>
                    <li><?php echo $lang['speccs-cpu-li2'] ?></li>
                </ul>
            </ul>
        </div>

        <a href="javascript:toggle('arbeitsspeicher')">
            <h4><?php echo $lang['speccs-ram'] ?></h4>
        </a>
        <div id="arbeitsspeicher" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['speccs-ram-li1'] ?></li>
                    <li><?php echo $lang['speccs-ram-li2'] ?></li>
                </ul>
            </ul>
        </div>

        <a href="javascript:toggle('motherboard')">
            <h4><?php echo $lang['speccs-mb'] ?></h4>
        </a>
        <div id="motherboard" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['speccs-mb-li1'] ?></li>
                </ul>
            </ul>
        </div>

        <a href="javascript:toggle('monitor')">
            <h4><?php echo $lang['speccs-screen'] ?></h4>
        </a>
        <div id="monitor" style="display:none">
            <ul>
                <a href="javascript:toggle('monitor-1')">
                    <h5><?php echo $lang['speccs-screen1'] ?></h5>
                </a>
                <div id="monitor-1" style="display:none">
                    <ul>
                        <li><?php echo $lang['speccs-screen1-li1'] ?></li>
                        <li><?php echo $lang['speccs-screen1-li2'] ?></li>
                        <li><?php echo $lang['speccs-screen1-li3'] ?></li>
                        <li><?php echo $lang['speccs-screen1-li4'] ?></li>
                    </ul>
                </div>

                <a href="javascript:toggle('monitor-2')">
                    <h5><?php echo $lang['speccs-screen2'] ?></h5>
                </a>
                <div id="monitor-2" style="display:none">
                    <ul>
                        <li><?php echo $lang['speccs-screen2-li1'] ?></li>
                        <li><?php echo $lang['speccs-screen2-li2'] ?></li>
                        <li><?php echo $lang['speccs-screen2-li3'] ?></li>
                        <li><?php echo $lang['speccs-screen2-li4'] ?></li>
                    </ul>
                </div>
            </ul>
        </div>
        <a href="javascript:toggle('graphicscard')">
            <h4><?php echo $lang['speccs-gpu'] ?></h4>
        </a>
        <div id="graphicscard" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['speccs-gpu-li1'] ?></li>
                    <li><?php echo $lang['speccs-gpu-li2'] ?></li>
                    <li><?php echo $lang['speccs-gpu-li3'] ?></li>
                </ul>
            </ul>
        </div>

        <a href="javascript:toggle('speicher')">
            <h4><?php echo $lang['speccs-speicher'] ?></h4>
        </a>
        <div id="speicher" style="display:none">
            <ul>
                <a href="javascript:toggle('festplatte-1')">
                    <h5><?php echo $lang['speccs-speicher1'] ?></h5>
                </a>
                <div id="festplatte-1" style="display:none">
                    <ul>
                        <li><?php echo $lang['speccs-speicher1-li1'] ?></li>
                        <li><?php echo $lang['speccs-speicher1-li2'] ?></li>
                        <li><?php echo $lang['speccs-speicher1-li3'] ?></li>
                        <li><?php echo $lang['speccs-speicher1-li4'] ?></li>
                    </ul>
                </div>

                <a href="javascript:toggle('festplatte-2')">
                    <h5><?php echo $lang['speccs-speicher2'] ?></h5>
                </a>
                <div id="festplatte-2" style="display:none">
                    <ul>
                        <li><?php echo $lang['speccs-speicher2-li1'] ?></li>
                        <li><?php echo $lang['speccs-speicher2-li2'] ?></li>
                        <li><?php echo $lang['speccs-speicher2-li3'] ?></li>
                        <li><?php echo $lang['speccs-speicher2-li4'] ?></li>
                    </ul>
                </div>

                <a href="javascript:toggle('festplatte-3')">
                    <h5><?php echo $lang['speccs-speicher3'] ?></h5>
                </a>
                <div id="festplatte-3" style="display:none">
                    <ul>
                        <li><?php echo $lang['speccs-speicher3-li1'] ?></li>
                        <li><?php echo $lang['speccs-speicher3-li2'] ?></li>
                        <li><?php echo $lang['speccs-speicher3-li3'] ?></li>
                        <li><?php echo $lang['speccs-speicher3-li4'] ?></li>
                        <li><?php echo $lang['speccs-speicher3-li5'] ?></li>
                    </ul>
                </div>

                <a href="javascript:toggle('festplatte-4')">
                    <h5><?php echo $lang['speccs-speicher4'] ?></h5>
                </a>
                <div id="festplatte-4" style="display:none">
                    <ul>
                        <li><?php echo $lang['speccs-speicher4-li1'] ?></li>
                        <li><?php echo $lang['speccs-speicher4-li2'] ?></li>
                        <li><?php echo $lang['speccs-speicher4-li3'] ?></li>
                        <li><?php echo $lang['speccs-speicher4-li4'] ?></li>
                    </ul>
                </div>
            </ul>
        </div>

        <a href="javascript:toggle('headset-micro')">
            <h4><?php echo $lang['speccs-headset'] ?></h4>
        </a>
        <div id="headset-micro" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['speccs-headset-li1'] ?></li>
                </ul>
            </ul>
        </div>

        <a href="javascript:toggle('keyboard-mouse')">
            <h4><?php echo $lang['speccs-keyboard'] ?></h4>
        </a>
        <div id="keyboard-mouse" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['speccs-keyboard-li1'] ?></li>
                    <li><?php echo $lang['speccs-keyboard-li2'] ?></li>
                </ul>
            </ul>
        </div>

        <a href="javascript:toggle('other-speccs')">
            <h4><?php echo $lang['speccs-others'] ?></h4>
        </a>
        <div id="other-speccs" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['speccs-others-li1'] ?></li>
                    <li><?php echo $lang['speccs-others-li1'] ?></li>
                </ul>
            </ul>
        </div>

    </ul>
</div>
