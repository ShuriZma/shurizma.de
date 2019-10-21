<head>
    <title><?php echo $lang['specs'] ?></title>
</head>

<div id="content" class="bg-white">
    <h1><?php echo $lang['specs-title'] ?></h1>
    <p><?php echo $lang['specs-p1'] ?></p>
    <p><?php echo $lang['specs-p2'] ?></p>
    <p><?php echo $lang['specs-p3'] ?></p>
    <ul>
        <a href="javascript:toggle('operating-system')">
            <h4><?php echo $lang['specs-os'] ?><span class="red-link">*</span></h4>

        </a>
        <div id="operating-system" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['specs-os-li1'] ?></li>
                </ul>
            </ul>
        </div>

        <a href="javascript:toggle('cpu-prozessor')">
            <h4><?php echo $lang['specs-cpu'] ?><span class="red-link">*</span></h4>

        </a>
        <div id="cpu-prozessor" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['specs-cpu-li1'] ?></li>
                    <li><?php echo $lang['specs-cpu-li2'] ?></li>
                </ul>
            </ul>
        </div>

        <a href="javascript:toggle('arbeitsspeicher')">
            <h4><?php echo $lang['specs-ram'] ?><span class="red-link">*</span></h4>

        </a>
        <div id="arbeitsspeicher" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['specs-ram-li1'] ?></li>
                    <li><?php echo $lang['specs-ram-li2'] ?></li>
                </ul>
            </ul>
        </div>

        <a href="javascript:toggle('motherboard')">
            <h4><?php echo $lang['specs-mb'] ?><span class="red-link">*</span></h4>

        </a>
        <div id="motherboard" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['specs-mb-li1'] ?></li>
                </ul>
            </ul>
        </div>

        <a href="javascript:toggle('monitor')">
            <h4><?php echo $lang['specs-screen'] ?>
                <span class="red-link">*</span></h4>
        </a>
        <div id="monitor" style="display:none">
            <ul>
                <a href="javascript:toggle('monitor-1')">
                    <h5><?php echo $lang['specs-screen1'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="monitor-1" style="display:none">
                    <ul>
                        <li><?php echo $lang['specs-screen1-li1'] ?></li>
                        <li><?php echo $lang['specs-screen1-li2'] ?></li>
                        <li><?php echo $lang['specs-screen1-li3'] ?></li>
                        <li><?php echo $lang['specs-screen1-li4'] ?></li>
                    </ul>
                </div>

                <a href="javascript:toggle('monitor-2')">
                    <h5><?php echo $lang['specs-screen2'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="monitor-2" style="display:none">
                    <ul>
                        <li><?php echo $lang['specs-screen2-li1'] ?></li>
                        <li><?php echo $lang['specs-screen2-li2'] ?></li>
                        <li><?php echo $lang['specs-screen2-li3'] ?></li>
                        <li><?php echo $lang['specs-screen2-li4'] ?></li>
                    </ul>
                </div>
            </ul>
        </div>
        <a href="javascript:toggle('graphicscard')">
            <h4><?php echo $lang['specs-gpu'] ?><span class="red-link">*</span></h4>

        </a>
        <div id="graphicscard" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['specs-gpu-li1'] ?></li>
                    <li><?php echo $lang['specs-gpu-li2'] ?></li>
                    <li><?php echo $lang['specs-gpu-li3'] ?></li>
                </ul>
            </ul>
        </div>

        <a href="javascript:toggle('speicher')">
            <h4><?php echo $lang['specs-speicher'] ?><span class="red-link">*</span></h4>

        </a>
        <div id="speicher" style="display:none">
            <ul>
                <a href="javascript:toggle('festplatte-1')">
                    <h5><?php echo $lang['specs-speicher1'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="festplatte-1" style="display:none">
                    <ul>
                        <li><?php echo $lang['specs-speicher1-li1'] ?></li>
                        <li><?php echo $lang['specs-speicher1-li2'] ?></li>
                        <li><?php echo $lang['specs-speicher1-li3'] ?></li>
                        <li><?php echo $lang['specs-speicher1-li4'] ?></li>
                    </ul>
                </div>

                <a href="javascript:toggle('festplatte-2')">
                    <h5><?php echo $lang['specs-speicher2'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="festplatte-2" style="display:none">
                    <ul>
                        <li><?php echo $lang['specs-speicher2-li1'] ?></li>
                        <li><?php echo $lang['specs-speicher2-li2'] ?></li>
                        <li><?php echo $lang['specs-speicher2-li3'] ?></li>
                        <li><?php echo $lang['specs-speicher2-li4'] ?></li>
                    </ul>
                </div>

                <a href="javascript:toggle('festplatte-3')">
                    <h5><?php echo $lang['specs-speicher3'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="festplatte-3" style="display:none">
                    <ul>
                        <li><?php echo $lang['specs-speicher3-li1'] ?></li>
                        <li><?php echo $lang['specs-speicher3-li2'] ?></li>
                        <li><?php echo $lang['specs-speicher3-li3'] ?></li>
                        <li><?php echo $lang['specs-speicher3-li4'] ?></li>
                        <li><?php echo $lang['specs-speicher3-li5'] ?></li>
                    </ul>
                </div>

                <a href="javascript:toggle('festplatte-4')">
                    <h5><?php echo $lang['specs-speicher4'] ?><span class="red-link">*</span></h5>

                </a>
                <div id="festplatte-4" style="display:none">
                    <ul>
                        <li><?php echo $lang['specs-speicher4-li1'] ?></li>
                        <li><?php echo $lang['specs-speicher4-li2'] ?></li>
                        <li><?php echo $lang['specs-speicher4-li3'] ?></li>
                        <li><?php echo $lang['specs-speicher4-li4'] ?></li>
                    </ul>
                </div>
            </ul>
        </div>

        <a href="javascript:toggle('headset-micro')">
            <h4><?php echo $lang['specs-headset'] ?><span class="red-link">*</span></h4>

        </a>
        <div id="headset-micro" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['specs-kopfhörer-li1'] ?></li>
                    <li><?php echo $lang['specs-mikro-li1'] ?></li>
                </ul>
            </ul>
        </div>

        <a href="javascript:toggle('keyboard-mouse')">
            <h4><?php echo $lang['specs-keyboard'] ?><span class="red-link">*</span></h4>

        </a>
        <div id="keyboard-mouse" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['specs-keyboard-li1'] ?></li>
                    <li><?php echo $lang['specs-keyboard-li2'] ?></li>
                </ul>
            </ul>
        </div>

        <a href="javascript:toggle('other-speccs')">
            <h4><?php echo $lang['specs-others'] ?><span class="red-link">*</span></h4>

        </a>
        <div id="other-speccs" style="display:none">
            <ul>
                <ul>
                    <li><?php echo $lang['specs-others-li1'] ?></li>
                    <li><?php echo $lang['specs-others-li2'] ?></li>
                </ul>
            </ul>
        </div>
    </ul>
    <p class="hinweis"><span class="red-link">*</span><?php echo $lang['specs-info1'] ?></p>
</div>
