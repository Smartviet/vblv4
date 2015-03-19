<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="#">Quản trị</a> <span class="divider">></span></li>
            <li class="active">Sản phẩm</li>
        </ul>

        <ul class="buttons">
            <li>
                <a href="#" class="link_bcPopupList"><span class="icon-user"></span><span class="text">Users list</span></a>

                <div id="bcPopupList" class="popup">
                    <div class="head">
                        <div class="arrow"></div>
                        <span class="isw-users"></span>
                        <span class="name">List users</span>
                        <div class="clear"></div>
                    </div>
                    <div class="body-fluid users">

                        <div class="item">
                            <div class="image"><a href="#"><img src="<?= base_url() ?>assets/backend/img/users/aqvatarius.jpg" width="32"/></a></div>
                            <div class="info">
                                <a href="#" class="name">Aqvatarius</a>
                                <span>online</span>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="item">
                            <div class="image"><a href="#"><img src="<?= base_url() ?>assets/backend/img/users/olga.jpg" width="32"/></a></div>
                            <div class="info">
                                <a href="#" class="name">Olga</a>
                                <span>online</span>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="item">
                            <div class="image"><a href="#"><img src="<?= base_url() ?>assets/backend/img/users/alexey.jpg" width="32"/></a></div>
                            <div class="info">
                                <a href="#" class="name">Alexey</a>
                                <span>online</span>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="item">
                            <div class="image"><a href="#"><img src="<?= base_url() ?>assets/backend/img/users/dmitry.jpg" width="32"/></a></div>
                            <div class="info">
                                <a href="#" class="name">Dmitry</a>
                                <span>online</span>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="item">
                            <div class="image"><a href="#"><img src="<?= base_url() ?>assets/backend/img/users/helen.jpg" width="32"/></a></div>
                            <div class="info">
                                <a href="#" class="name">Helen</a>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="item">
                            <div class="image"><a href="#"><img src="<?= base_url() ?>assets/backend/img/users/alexander.jpg" width="32"/></a></div>
                            <div class="info">
                                <a href="#" class="name">Alexander</a>
                            </div>
                            <div class="clear"></div>
                        </div>

                    </div>
                    <div class="footer">
                        <button class="btn" type="button">Add new</button>
                        <button class="btn btn-danger link_bcPopupList" type="button">Close</button>
                    </div>
                </div>

            </li>
            <li>
                <a href="#" class="link_bcPopupSearch"><span class="icon-search"></span><span class="text">Search</span></a>

                <div id="bcPopupSearch" class="popup">
                    <div class="head">
                        <div class="arrow"></div>
                        <span class="isw-zoom"></span>
                        <span class="name">Search</span>
                        <div class="clear"></div>
                    </div>
                    <div class="body search">
                        <input type="text" placeholder="Some text for search..." name="search"/>
                    </div>
                    <div class="footer">
                        <button class="btn" type="button">Search</button>
                        <button class="btn btn-danger link_bcPopupSearch" type="button">Close</button>
                    </div>
                </div>
            </li>
        </ul>

    </div>

    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Simple table</h1>
                    <ul class="buttons">
                        <li><a href="#" class="isw-download"></a></li>
                        <li><a href="#" class="isw-attachment"></a></li>
                        <li>
                            <a href="#" class="isw-settings"></a>
                            <ul class="dd-list">
                                <li><a href="#"><span class="isw-plus"></span> New document</a></li>
                                <li><a href="#"><span class="isw-edit"></span> Edit</a></li>
                                <li><a href="#"><span class="isw-delete"></span> Delete</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <table cellpadding="0" cellspacing="0" width="100%" class="table">
                        <thead>
                        <tr>
                            <th><input type="checkbox" name="checkall"/></th>
                            <th width="25%">ID</th>
                            <th width="25%">Name</th>
                            <th width="25%">E-mail</th>
                            <th width="25%">Phone</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>101</td>
                            <td>Dmitry</td>
                            <td>dmitry@domain.com</td>
                            <td>+98(765)432-10-98</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>102</td>
                            <td>Alex</td>
                            <td>alex@domain.com</td>
                            <td>+98(765)432-10-99</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>103</td>
                            <td>John</td>
                            <td>john@domain.com</td>
                            <td>+98(765)432-10-97</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>104</td>
                            <td>Angelina</td>
                            <td>angelina@domain.com</td>
                            <td>+98(765)432-10-90</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>105</td>
                            <td>Tom</td>
                            <td>tom@domain.com</td>
                            <td>+98(765)432-10-92</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>


        <div class="dr"><span></span></div>

    </div>

</div>