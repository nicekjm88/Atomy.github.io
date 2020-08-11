<!DOCTYPE html>
<html lang="ko-KR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>상세페이지 애니메이션</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/common.css">
  <link rel="stylesheet" href="assets/css/detail-view.css">
  <link rel="stylesheet" href="assets/css/demo.css">
</head>

<body>
<section id="side-nav">
  <?php include "_include/nav.php" ?>
</section>
<section id="content">
  <div class="intro">
    <h1>
      <img src="assets/image/logo.png" alt=""><br>
      제품 상세 인터렉션<br>
      데모 페이지
    </h1>
    <p>스크롤 해보세요.</p>
  </div>
  <div id="tGdsDetail">
    <section class="detail-description">
      <!-- 대표 제품 소개 -->
      <article class="product-main-picture">
        <a href="https://atomy.gitbook.io/atomy-front/detail-view/text-animation" target="_blank">
          <h1 class="text-animation">
            <span>애</span><span>터</span><span>미</span>
            <span>블</span><span>러</span><span>셔</span>
            <span>듀</span><span>오</span>
            <span>키</span><span>트</span>
          </h1>
        </a>
        <figure class="border-style" data-aos="fade">
          <img src="assets/image/img_example5.jpg" alt="대표 이미지">
        </figure>
        <!-- <iframe width="100%" height="415" src="https://www.youtube.com/embed/BHnxgVwsnZ4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        <!-- <figure>
              <img src="assets/image/img_example4.jpg" alt="">
          </figure> -->
        <div class="area-hashtag">
          <ul class="list-hashtag text-animation2">
            <li>밀착감</li>
            <li>가루날림, 뭉침 NO!</li>
            <li>투명피부</li>
            <li>블러링효과</li>
            <li>완벽한 컬러발색</li>
            <li>보송한사용감</li>
            <li>메이크업 지속성</li>
          </ul>
          <img class="img-bg" src="assets/image/img_article2.jpg" alt="">

        </div>
      </article>

      <!-- 사용 방법 -->
      <article class="product-how-to-use">
        <h1 class="title"><span>사용방법</span></h1>
        <!-- <figure>
              <img src="assets/image/img_example2.gif" alt="이미지">
          </figure> -->
        <div class="center animation-down-up">
          <p><strong>HOW TO USE</strong></p>
          <p>양 볼과 광대의 윤곽을 따라 가볍게 터치하듯 블렌딩해 주세요</p>
          <p>
            <span class="box box__rounded">애터미 블러셔 튜오 키트 사용 팁</span>
          </p>
        </div>
        <ul class="layout-inline animation-left-right">
          <li><img src="assets/image/img_howtouse1.gif" alt=""></li>
          <li><img src="assets/image/img_howtouse2.gif" alt=""></li>
          <li><img src="assets/image/img_howtouse3.gif" alt=""></li>
        </ul>

        <div class="mt50" data-aos="fade-up">
          <p><img src="assets/image/img_howtouse4.gif" alt=""></p>
        </div>
      </article>

      <!-- 제품 구성 -->
      <article class="product-composition">
        <h1 class="title"><span>제품구성</span></h1>
        <figure>
          <img src="assets/image/img_composition.jpg" alt="이미지">
        </figure>
        <div class="table-wrap">
          <table class="table table--type2">
            <colgroup>
              <col style="width: 20%">
              <col>
            </colgroup>
            <tbody>
              <tr>
                <th scope="row">제품명</th>
                <td>애터미 블러셔 듀오 키트 (리뉴얼)</td>
              </tr>
              <tr>
                <th scope="row">용량</th>
                <td>상세설명 참조</td>
              </tr>
              <tr>
                <th scope="row">기술 및 원료제공</th>
                <td>제조판매업자 : 애터미㈜ / 기술 및 원료 제공 : 콜마비앤에이치㈜ 제조업자 : 한국콜마㈜</td>
              </tr>
              <tr>
                <th scope="row">제품명</th>
                <td>애터미 블러셔 듀오 키트 (리뉴얼)</td>
              </tr>
              <tr>
                <th scope="row">용량</th>
                <td>상세설명 참조</td>
              </tr>
              <tr>
                <th scope="row">기술 및 원료제공</th>
                <td>제조판매업자 : 애터미㈜ / 기술 및 원료 제공 : 콜마비앤에이치㈜ 제조업자 : 한국콜마㈜</td>
              </tr>
              <tr>
                <th scope="row">제품명</th>
                <td>애터미 블러셔 듀오 키트 (리뉴얼)</td>
              </tr>
              <tr>
                <th scope="row">용량</th>
                <td>상세설명 참조</td>
              </tr>
              <tr>
                <th scope="row">기술 및 원료제공</th>
                <td>제조판매업자 : 애터미㈜ / 기술 및 원료 제공 : 콜마비앤에이치㈜ 제조업자 : 한국콜마㈜</td>
              </tr>
            </tbody>
          </table>
        </div>
      </article>

      <!-- 아코디언 -->
      <article>
        <ul id="product">
          <li>
            <button type="button" class="product-title">주의사항</button>
            <div class="product-content">
              <!-- 주의 사항 -->
              <article class="product-caution">
                <h1 class="title"><span>주의사항</span></h1>

                <h2>사용 시의 주의사항</h2>
                <ol>
                  <li>화장품 사용 시 또는 사용 후 직사광선에 의하여 사용부위가 붉은 반점, 부어오름 또는 가려움증 등의 이상 증상이나 부작용이 있을 경우 전문의
                    등과 상담할 것</li>
                  <li>상처가 있는 부위 등에는 사용을 자제할 것</li>
                  <li>보관 및 취급 시 주의사항
                    <ol>
                      <li>어린이의 손이 닿지 않는 곳에 보관할 것</li>
                      <li>직사광선을 피해서 보관할 것</li>
                    </ol>
                  </li>
                </ol>
              </article>
            </div>
          </li>
          <li>
            <button type="button" class="product-title">전자상거래 등에서의 상품정보제공 고시</button>
            <div class="product-content">
              <!-- 전자상거래 등에서의 상품정보제공 고시 -->
              <article class="product-spec">
                <!-- <strong class="table-title">전자상거래 등에서의 상품정보제공 고시</strong> -->
                <table class="table">
                  <colgroup>
                    <col style="width: 30%">
                    <col>
                  </colgroup>
                  <tbody>
                    <tr>
                      <th scope="row">용량 또는 중량</th>
                      <td>상세설명 참조</td>
                    </tr>
                    <tr>
                      <th scope="row">제품 주요 사항</th>
                      <td>상세설명 참조</td>
                    </tr>
                    <tr>
                      <th scope="row">기능성 화장품의 경우 화장품 법에 따른 식품의약품안전처 심사 필 유무</th>
                      <td>제조판매업자 : 애터미㈜ / 기술 및 원료 제공 : 콜마비앤에이치㈜ 제조업자 : 한국콜마㈜</td>
                    </tr>
                  </tbody>
                </table>
              </article>
            </div>
          </li>
        </ul>
      </article>
    </section>
  </div>
</section>

  <!-- script -->
  <script src="https://unpkg.com/jquery@2.2.4/dist/jquery.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="assets/js/accordion.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>