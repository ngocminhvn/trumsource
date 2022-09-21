<?php
if(empty($_POST['domain'])){
    die('Vui lòng nhập tên miền');
}
$domain = $_POST['domain'];

$whois = json_decode(file_get_contents('https://whois.inet.vn/api/whois/domainspecify/'.$domain = str_replace(array('https://','http://','https://www.'), '', $domain)));

if($whois->code == '0'){ ?>
                                    <div class="card border border-danger">
                                        <div class="card-header border border-warning">
                                            Thông tin WHOIS tên miền
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="table-responsive">
                                            <table class="table table-striped">
                                                <colgroup>
                                                    <col width="28%" />
                                                    <col width="72%" />
                                                </colgroup>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            Tên miền
                                                        </td>
                                                        <td>
                                                            <a class="ng-binding ng-scope" href="<?=$whois->domainName;?>" target="_blank"><?=$whois->domainName;?></a>
                                                            <div class="flex-item flex-auto">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Ngày đăng ký:
                                                        </td>
                                                        <td>
                                                            <span ng-bind="domain.creationDate" class="ng-binding ng-scope"><?=$whois->creationDate;?></span>
                                                        </td>
                                                    </tr>
                    
                                                    <tr>
                                                        <td>
                                                            Ngày hết hạn:
                                                        </td>
                                                        <td>
                                                            <span ng-bind="domain.expirationDate" class="ng-binding ng-scope"><?=$whois->expirationDate;?></span>
                                                        </td>
                                                    </tr>
                    
                                                    <tr>
                                                        <td>
                                                            Chủ sở hữu tên miền:
                                                        </td>
                                                        <td>
                                                            <span ng-bind="domain.registrantName" class="ng-binding ng-scope">
                                                                <?php 
                                                                if($whois->registrantOrganization == NULL){
                                                                    echo($whois->registrantName);
                                                                }else{ echo($whois->registrantOrganization); } 
                                                                ?>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Cờ trạng thái:
                                                        </td>
                                                        <td>
                                                            <div ng-repeat="st in domain.status" class="ng-scope">
                                                                <?php foreach($whois->status as $key){
                                                                    echo('<div ng-repeat="st in domain.status" class="ng-scope"><span class="ng-binding ng-scope">'.$key.'</span></div>');
                                                                } ?>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Quản lý tại Nhà đăng ký:
                                                        </td>
                                                        <td>
                                                            <span ng-bind="domain.registrar" class="ng-binding ng-scope"><?=$whois->registrantName;?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Nameservers:
                                                        </td>
                                                        <td>
                                                                <?php foreach($whois->nameServer as $value){
                                                                    echo('<div ng-repeat="ns in domain.nameServer" class="ng-scope"><span class="ng-binding ng-scope">'.$value.'</span></div>');
                                                                } ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
<?php }else{
    echo '
            <center>
                <img src="https://i.imgur.com/se7QLIS.png" width="100" height="100" class="pt-3" />
                <p class="pt-3">Tên miền <strong>'.$domain.'</strong> chưa được đăng kí!</p>
            </center>
    ';
}
?>