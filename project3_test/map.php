<?php include $_SERVER['DOCUMENT_ROOT']."/project3_test/header.php";?>

<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">

<head>
    <title>Google Maps</title>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500&display=swap" rel="stylesheet">
    <style type="text/css">
        /* Set the size of the div element that contains the map */
        .map_wrap{
            width: 100%;
            height: 100%;
            background-color: rgb(245, 245, 245);
            padding-bottom: 5%;
        }
        .map_box{
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
        }
        .map_title{
            text-align: center;
            font-size: 1.3rem;
            font-family: 'M PLUS Rounded 1c', sans-serif;
            padding: 5% 0 5% 0;
        }
        #map {
            height: 800px;
            /* The height is 400 pixels */
            max-width: 80%;
            /* The width is the width of the web page */
            margin: 0 auto;
        }
        .text-box{
            /* display: flex;
            justify-content: center; */
            text-align: center;

        }
        h1{
            text-align : center;
        }
        p{
            font-family: 'M PLUS Rounded 1c', sans-serif;
            font-size: 1.2rem;
            text-align : center;
        }
        #h_img{
            width:70%;
            height: 25rem;
            text-align: center;
        }
        @media (max-width: 700px){
            p{
                font-size: 1rem;
            }
            #h_img{
                width:70%;
                height: 15rem;
                text-align: center;
        }
        }
    </style>
        <script>
        function initMap() {

            // 지도 스타일
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 7,
                center: { lat: 36.738367, lng: 128.063889 },
            });

            // 마커 정보
            const locations = [
                { place:'<div class="wrap"><h1>NeulBom Healing Cafe</h1><p>796, Yongdu-daero, Bongyang-eup, Jecheon-si, Chungcheongbuk-do, Republic of Korea</p><div class = "text-box"><img src = "/project3_test/img/NeulBom.png"  id="h_img"><div class= "info"><p>怪談では普通の食堂のようにきちんと運営されているのに「お客さんが肉を注文してもいないのに誰なのか分からない従業員が肉を持ってきてくれた」、「皿洗いをせずに退勤しても朝出勤してみればきれいに整理されている」、「お客さんが食べ物を持っていたずらをすると誰かが後頭部を殴る」など怪奇な話がある。<br>2012年度にソウルから来た40代夫婦が売却し、2階には法堂、1階にはカフェを設け、3年ほど運営した後、店をたたんだという。 現在は新しい社長が入ってきて、ヌルボムヒーリングカフェにリモデリングされ、凶家の姿はなく、あるブロガーのレビューによると、食事、カフェ、マッサージ、民宿、臨終体験、凶家体験、鬼体験、度胸体験ができるという。</p></div></div></div>', lat: 37.152170, lng: 128.134829},
                { place:'<div class="wrap"><h1>a cobalt mine</h1><p>37-35, Pyeongsan 1-gil, Gyeongsan-si, Gyeongsangbuk-do, Republic of Korea</p><div class = "text-box"><img src = "/project3_test/img/cobalt.png"  id="h_img"><div class= "info"><p>白磁山の麓に位置していたコバルト廃鉱だ。 日本による植民地時代時コバルトを採掘していた鉱山であり、コバルトが枯渇すると廃鉱になった。 実際、韓国戦争の時、国軍によって報道連盟を含む民間人、服役者虐殺が起きたところで、遺体を廃鉱坑道に投げつけたところで、当時約3500人が殺害されたと推定されるという。 00年代に入って遺体発掘作業が進められ数百体の遺体が発掘されたが、08年頃、インターブルゴ慶山カントリークラブ進入路を開設し、眼鏡工場の建物をファティマ療養病院にリモデリングしたことで、上党郷の遺体が焼失したものと見られる。<br>怪談:1960年に繊維工場が建設されたが、火災で工場がつぶれて社長が自殺し、その後に建設された靴工場も同じ理由で潰れ、やはり社長が自殺したという噂と最後に入った眼鏡工場の社長が狂って工場と寮に火をつけ、22人の職員が全員死んで社長も自殺したという怪談がある。</p></div></div></div>', lat: 35.799714, lng: 128.761312 },
                { place:'<div class="wrap"><h1>Miryang Closed School</h1><p>54-33, Gugok-gil, Sangdong-myeon, Miryang-si, Gyeongsangnam-do, Republic of Korea</p><div class = "text-box"><img src = "/project3_test/img/Miryang.png"  id="h_img"><div class= "info"><p>安仁初等学校が廃校になって有名な凶家体験地になった密陽廃校だ。 国内凶家7位の密陽廃校は、韓国戦争当時、ここに避難していた避難民が非常に多かったという辛い歴史がある廃校だ。 現在は嶺南第2総合病院に変わる。</p></div></div></div>', lat: 35.539367, lng: 128.760278 },
                { place:'<div class="wrap"><h1>Yeongdeok Raw Fish Restaurant</h1><p>Bugyeongoncheon-gil, Namjeong-myeon, Yeongdeok-gun, Gyeongsangbuk-do, Republic of Korea</p><div class = "text-box"><img src = "/project3_test/img/Yeongdeok.png"  id="h_img"><div class= "info"><p>怪談:ある夫婦が刺身屋を開くためにその土地を契約したが、初期は刺身屋、食堂に変わり、後日巫俗の夫婦が間借りして暮らしたが、いくらも耐えられずに出て行ったという。 また、そこには軍部隊のようなところがあったが、そこで勤めていた軍人がある女性と交際し、除隊当日に女性から妊娠の知らせを聞いて女性を避けることになったが、女性は男性を探し回り、結局連絡をするが、男性は婚約した状態で女性は自ら命を絶ったという。<br>ここに巫女の2人が気を抑えるためにここに住んでいたが、2人とも狂ってその家を飛び出したという話もある。</p></div></div></div>', lat: 36.282056, lng: 129.375972 },
                { place:'<div class="wrap"><h1>Lilies Daycare Center</h1><p>Hwaseong-si, Gyeonggi-do, Republic of Korea</p><div class = "text-box"><img src = "/project3_test/img/Lilies.png"  id="h_img"><div class= "info"><p>1995年2月23日から営業を始めたこの保育園は、80人余りの子供たちが通っているほど大きな規模を誇る華城保育園の一つだったという。<br>怪談:華城百合保育園は幼稚園児たちと先生が授業をしている途中に火事が発生し、80人余りの園児たちが命の子供たちが燃えて死んだという話が出回っている。</p></div></div></div>', lat: 37.201839, lng: 127.047130 },
                { place:'<div class="wrap"><h1>エバーランド·ホラーメイズ</h1><p>Everland-ro, Pogok-eup, Cheoin-gu, Yongin-si, Gyeonggi-do, Republic of Korea</p><div class = "text-box"><img src = "/project3_test/img/horror.jpg" id="h_img"><div class= "info"><p>ホラーメイズは、合計Ⅰ、Ⅱとなっているお化け屋敷の形をしたエバーランドの数少ない有料アトラクションだ。<br>ホラーメイズの設定は永遠の生命を研究していた狂った科学者は、人々を拉致、監禁して生体実験を行い、最後に娘に生体実験を行う。 しかし、実験中に娘が死ぬことになり、娘は幽霊として現れ、山を歩き回るという設定。</p></div></div></div>', lat: 37.289760, lng: 127.204336},
                { place:'<div class="wrap"><h1>Chungil Girls High School</h1><p>156, Wonnae-dong, Yuseong-gu, Daejeon, Republic of Korea</p><div class = "text-box"><img src = "/project3_test/img/chungil.jpg" id="h_img"><div class= "info"><p>閉校の中で最も雰囲気が肌寒く、国内廃家体験愛好者や廃墟オタクたちの聖地と呼ばれている。あまりにも多くの人がここに来て、ありとあらゆる落書きを残して行く。 周辺の最寄りの民家も大田刑務所のため約200m以上離れているため、住民の苦情も受け付けない奥地廃校。</p></div></div></div>', lat: 36.308940, lng: 127.321266},
                { place:'<div class="wrap"><h1>Korea minseokchon</h1><p>90, Minsokchon-ro, Giheung-gu, Yongin-si, Gyeonggi-do, Republic of Korea</p><div class = "text-box"><img src = "/project3_test/img/minseok.jpg" id="h_img"><div class= "info"><p>韓国の伝統家屋と慣習を紹介する民俗博物館で、食堂とテーマパークを備えている。特殊メイク技手科の先端機械で再現された韓国伝統の鬼たちに出会うことができる。</p></div></div></div>', lat: 37.258445, lng: 127.116997},
                { place:'<div class="wrap"><h1>LotteWorld-Tomb of HORROR</h1><p>240, Olympic-ro, Songpa-gu, Seoul, Republic of Korea</p><div class = "text-box"><img src = "/project3_test/img/lotte.jpg" id="h_img"><div class= "info"><p>スリル満点の恐怖体験館！ 韓国初のオフラインアドベンチャーゲームが楽しめる。<br>恐怖とスリルに満ちたお墓の中へ！ゾンビがうようよする墓橋、鉄格子、暗い迷路などを通過しながらぞっとする恐怖をお楽しみください。韓国初のオフラインアドベンチャーゲームです。</p></div></div></div>', lat: 37.511103, lng: 127.098199},
                { place:'<div class="wrap"><h1>    Osan Factory</h1><p>128, Osancheon-ro, Osan-si, Gyeonggi-do, Republic of Korea</p><div class = "text-box"><img src = "/project3_test/img/osan.jpeg" id="h_img"><div class= "info"><p>烏山駅を通って鉄路の向こう側にある。 雄大な廃工場ととてつもなく広い敷地にふさわしく、数多くの幽霊たちが飛び交い、事故によって金縛りに遭った怨霊が多く、むやみに入っては大きな災いを免れるという経験談が主だった。<br>それで幽霊がよく出没する場所として多くのホラーマニアに脚光を浴びるところだった。 現在は入口は清楚に封鎖されており、左側の警戒所には警備が24時間常駐している。</p></div></div></div>', lat: 37.144370, lng: 127.065051}

            ];
            
            //인포윈도우
            var infowindow = new google.maps.InfoWindow();

            //마커 생성
            for (var i = 0; i < locations.length; i++) {
                var marker = new google.maps.Marker({
                    map: map,
                    //label: locations[i].place,
                    position: new google.maps.LatLng(locations[i].lat, locations[i].lng),                    
                    icon:{
                        url: "/project3_test/img/ghost.png",
                        scaledSize: new google.maps.Size(40, 50),
                        labelOrigin: new google.maps.Point(20, 47),
                        anchor: new google.maps.Point(50,32)
                    }
                });


                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        //html로 표시될 인포 윈도우의 내용
                        infowindow.setContent(locations[i].place);
                        //인포윈도우가 표시될 위치
                        infowindow.open(map, marker);
                    }
                })(marker, i));
                
                if (marker) {
                    marker.addListener('click', function() {
                        //중심 위치를 클릭된 마커의 위치로 변경
                        map.setCenter(this.getPosition());
                        //마커 클릭 시의 줌 변화
                        map.setZoom(14);
                    });
                }
            }
        }


    </script>
</head>

<body>
    <div class="map_wrap">
        <div class="map_box">
            <h3 class="map_title">ホラースポット</h3>
            <!--The div element for the map -->
            <div id="map"></div>
        </div>
    </div>


    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcw51yGd51g3-ZuVmsegSfyCnfD4R1Gi8&callback=initMap&libraries=&v=weekly&language=en"
        async>
    </script>
</body>
</html>

<!-- 구글맵 마커 팝업 참고: https://cocoon1787.tistory.com/552-->
<?php include $_SERVER['DOCUMENT_ROOT']."/project3_test/footer.php";?>