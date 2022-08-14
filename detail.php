<?php 
    include_once('./Parts/link.php');
?>

<?php 
    include_once('./Parts/header.php');
?>

    <div class="center">
        <h1 class="mt-5 mb-2">MOTIVATER</h1>
        <p class="mt-4 mb-1">Mission</p>
        <div class="col-md-8 m-auto px-2">
            <h3 class="m-auto select-mission col-md-12 mb-3 py-1">ガタイをよくする！</h3>
        </div>

        <div class="row col-md-8 m-auto mt-3">
            <div class="Target col-md-4">
                <span class="mb-1">Target</span>
                <div class="mt-3">
                    <p class="fw-bold mt-1 mb-1">7月22日</p>
                    <ol id="switch" class="mission text-start px-1">
                        <!-- <a href="" data-bs-toggle="modal" data-bs-target="#modal1"><li>ダンベル200回</li></a> -->
                        <?php
                            include_once('./Modals/Target-modal.php');
                        ?>
                        <a class="col-md-8" href="" data-tab="0"><li><img  class="imgnone d-inline-block align-text-top me-3" src="images/bad.png" alt="アイコン" width="20" height="20">ダンベル200回</li></a>
                        <a class="col-md-8" href="" data-tab="0"><li><img  class="imgnone d-inline-block align-text-top me-3" src="images/bad.png" alt="アイコン" width="20" height="20">腹筋100回</li></a>
                        <a class="col-md-8" href="" data-tab="1"><li><img  class="imgnone d-inline-block align-text-top me-3" src="images/bad.png" alt="アイコン" width="20" height="20">背筋50回</li></a>
                        <a class="col-md-8" href="" data-tab="1"><li><img  class="imgnone d-inline-block align-text-top me-3" src="images/bad.png" alt="アイコン" width="20" height="20">ストレッチ（足）</li></a>
                        <a class="col-md-8" href="" data-tab="1"><li><img  class="imgnone d-inline-block align-text-top me-3" src="images/bad.png" alt="アイコン" width="20" height="20">背筋50回</li></a>
                        <a class="col-md-8" href="" data-tab="1"><li><img  class="imgnone d-inline-block align-text-top me-3" src="images/bad.png" alt="アイコン" width="20" height="20">プロテインを飲む</li></a>
                    </ol>
                </div>
            </div>
            <div class="Calendar col-md-8">
                <p class="mb-1">Calendar</p>
                <div class="container px-1">
                    <h5 class="mt-2 mb-3"><a href="#">&lt;</a>&nbsp;2021年 6月&nbsp;<a href="#">&gt;</a></h5>
                    <table class="table table-bordered">
                        <tr>
                            <th>日</th>
                            <th>月</th>
                            <th>火</th>
                            <th>水</th>
                            <th>木</th>
                            <th>金</th>
                            <th>土</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>1<img src="./images/GoodJob.png" alt="達成"></td>
                            <td>2</td>
                            <td>3</td>
                            <td>4<img class="none" src="./images/bad.png" alt="失敗"></td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                            <td class="today">16</td>
                            <td>17</td>
                            <td>18</td>
                            <td>19</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                            <td>25</td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td>30</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="./JavaScript/app.js"></script>

    <?php 
    include_once('./Parts/footer.php');
?>