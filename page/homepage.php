<style type="text/css" media="screen">
    .slides_container {
        width:708px;
        display:none;        
    }

    .slides_container div.slide {
        width:708px;
        height:505px;
        display:block;
        z-index: -1;
    }

    .item {
        float:left;
        width:708px;
        height:505px;        
        background:#efefef;
    }

    .pagination {
        list-style:none;
        margin:0;
        padding:0;
    }
    .pagination .current a {
        color:red;
    }
    #slides {
        margin: 0px auto;
        width:708px;
        height:505px;
        position: relative;
    }
    ul.pagination {display: none;}
    #slides .prev {
        background: url(../images/btn_prev.png) no-repeat;
        display: block;
        height: 100px;
        left: -105px;
        position: absolute;
        top: 200px;
        width: 70px;
        color: transparent;
    }
    #slides .next {
        background: url(../images/btn_next.png) no-repeat;
        display: block;
        height: 100px;
        right: -105px;
        position: absolute;
        top: 200px;
        width: 70px;
        color: transparent;
    }
    #slides .slide_bg {
        background: url("../images/slide_bg.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
        height: 510px;
        left: -10px;
        position: absolute;
        top: -3px;
        width: 720px;
        z-index: 9999;
        display: none;
    }
    #store {
        width: 980px;
        margin: 0px auto;
        text-align: center;
        margin-top: 30px;
        padding-left: 15px;
    }
    #store ul li{
        list-style: none; 
        display: inline-block;
        padding: 0px 10px;
        height: 150px;
    }
    #store ul li a {
        display: inline-block;
    }

</style>
<div id="slides">
    <div class="slides_container">
        <div class="slide" step="0">
            <div class="item">
                <iframe width="708" height="505" src="//www.youtube.com/embed/jTjiahl1KEo?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>                
            </div>
        </div>

        <?php
        for ($i = 1; $i <= 3; $i++) {
            ?>
            <div class="slide" step="<?php echo $i ?>">
                <div class="item">
                    <img src="/images/slides/<?php echo $i ?>.png" alt="" />
                </div>
            </div>
            <?php
        }
        ?>

    </div>
    <div class="slide_bg"></div>
</div>

<div id="store">
    <ul>
        <li>
            <a href="#" target="_blank">
                <img src="/images/ios.png" alt="" />
            </a>
        </li>
        <li>
            <a href="https://play.google.com/store/apps/details?id=com.earlystart.android.monkeyjunior" target="_blank">
                <img src="/images/android.png" alt="" />
            </a>
        </li>
    </ul>
</div>
<script type="text/javascript" src="/js/slides.js"></script>
<script type="text/javascript">
    var total = 3;
    var current = 0;
    $(function () {
        $('#slides').slides({
            preload: true,
            generateNextPrev: true
        });
        $('.next').click(function () {
            if (current == total) {
                current = 0;
            } else {
                current++;
            }
            activeBg(current);
        });
        $('.prev').click(function () {
            if (current == 0) {
                current = total;
            } else {
                current--;
            }
            activeBg(current);
        });
        activeBg(current);
    });

    function activeBg(current) {
        console.log(current);
        if (current == 0) {
            $('.slide_bg').hide();
        } else {
            $('.slide_bg').show();
        }
    }

</script>

<div class="border-line">
    <span></span>
</div>
<div class="title">
    <span class="chicken"></span>
    <h2>About Monkey Junior</h2>
</div>
<div class="clear"></div>

<div class="content">
<p>Monkey Junior offers comprehensive reading courses for babies, toddlers and preschoolers that teach your child to read, progressing from single words to phrases, from short sentences to very complicated ones. Monkey Junior is developed in collaboration with early education experts and adopts the scientifically proven methodologies proposed by famous researchers, such as Glenn Doman, Shichida and Maria Montessori.</p>
<p>Each word is presented in different ways: In varying fonts, colors and sizes; as a stand-alone word or in a sentence; with high-quality pictures and videos, and in three different voices (male, female and child). This variety in presentation will help your child to understand the concepts and will reinforce them, laying the foundation for reading and forming sentences.</p>
<p>Best of all, new courses are released every month. New languages are being added, too. We&rsquo;re starting with English (American English, British English, and Australian English), but French, Spanish, Vietnamese, Chinese and Japanese are on the way!</p>
<p>SUPPORT FOR MULTIPLE PROFILES/LEARNERS<br />- Each child is assigned a suitable level of difficulty depending on his/her reading comprehension level.<br />- Add multiple users and switch between user accounts.<br />- Save and track user progress, app settings at user level.</p>
<p>RICH AND HIGH QUALITY CONTENT:<br />- Each course contains a total of 3000 words.<br />- A course has ten different categories such as colors, counting, actions, baby things, and more.<br />- A course has approximately 50 lessons.<br />- Lessons are never the same.<br />- A word has three fonts, five colors, three high quality pictures, four sentences, up to four videos, and three different voices.<br />- All courses feature wonderful sound effects and professional voice-overs.</p>
<p><br />ENGAGING GAME MODES<br />- Different game modes will reinforce your child&rsquo;s learning experience.<br />- Games are adjusted and customized by the individual&rsquo;s progress.</p>
<p><br />AWARD SYSTEM<br />- Stickers are awarded after each lesson.<br />- Children can use stickers to build their own farms or rooms.<br />- Motivate your child to engage more with the app and to keep learning with new lessons.</p>
<p>NEW CONTENT ADDED EVERY MONTH<br />- A new course is released every month.<br />- New languages are being added.</p>
<p><br />FLASHCARDS<br />- Flashcards can be configured to run in different modes: flashcard (picture + word), only picture, only word, word then picture, picture then word<br />- The flash card interval can be changed from 0.1 second (super fast) to 3 seconds (super slow)</p>
<p><br />DOWNLOAD THE MONKEY JUNIOR APP NOW and enjoy the reading journey with your little ones!!!</p>
<p><br />About Us<br />Monkey Junior is developed by Early Start Co. As we specialize in early education, our motto is, &ldquo;Education starts at birth&rdquo;. We believe that education should be joyful and engaging. We have helped many children to become confident early readers, and we can help your child to be one, too.</p>
<p>Support<br />Have questions? We are here to help. Email us at support@monkeyjunior.com</p>

</p>
</div>