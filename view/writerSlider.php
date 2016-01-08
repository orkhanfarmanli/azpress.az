
<div class='writerSlider'>


        <div onclick='prevWriter()' class='w-prevButt' id='w-navButt'>

        </div>


          <div class='w-sliderContent'>

            <ul id='writerList' class='writerList'>

            <script type='text/javascript'>

            // writer array [

            writerArray = [
              ['img/sample.jpg','Filankəs Filankəsov','https://www.facebook.com'],
              ['img/sample.jpg','Filankəs Filankəsov','https://www.facebook.com'],
              ['img/sample.jpg','Filankəs Filankəsov','https://www.facebook.com'],
              ['img/sample.jpg','Filankəs Filankəsov','https://www.facebook.com'],
              ['img/sample.jpg','Filankəs Filankəsov','https://www.facebook.com'],
              ['img/sample.jpg','Filankəs Filankəsov','https://www.facebook.com'],
              ['img/sample.jpg','Filankəs Filankəsov','https://www.facebook.com'],
              ['img/sample.jpg','Filankəs Filankəsov','https://www.facebook.com'],
              ['img/sample.jpg','Filankəs Filankəsov','https://www.facebook.com'],
              ['img/sample.jpg','Filankəs Filankəsov','https://www.facebook.com'],
              ['img/sample.jpg','Filankəs Filankəsov','https://www.facebook.com']
              ];

            // writer array

            // writer list <ul>

            var writerList = document.getElementById('writerList');

            // writer list </ul>


            // writer box creation

                  for (var i = 0; i < writerArray.length; i++) {

                    // writer box

                          writerBox = document.createElement('li');

                    // writer link

                          writerLink = document.createElement('a');
                          writerLink.href = writerArray[i][2];

                   // writer link

                  //  writer img

                          writerImg = document.createElement('img');
                          writerImg.src = writerArray[i][0];

                  // writer img end

                  // writer description

                          writerDesc = document.createElement('DIV');
                          writerDescSpan = document.createElement('span');
                          writerDescText = document.createTextNode(writerArray[i][1]);

                  // writer description end

                          writerLink.appendChild(writerImg);
                          writerBox.appendChild(writerLink);
                          writerList.appendChild(writerBox);

                    // writer box end


                        }

            // writer box creation end


            // next writer function

            var count = 0;


            function nextWriter(){

              count-=240;


              writerList.style.transition = '0.6s all ease';

              writerList.style.transform = 'translateX('+count+'px)';


                if (count == (4-writerArray.length)*240) {
                        count=240;
                        console.log(count);
                    }


                  }

            function prevWriter(){

              count+=240;

              if (count==240) {
                  count = (4-writerArray.length)*240;
                  console.log(count);

              }


              writerList.style.transition = '0.6s all ease';

              writerList.style.transform = 'translateX('+count+'px)';

              console.log(count);

            }

            </script>

            </ul>

          </div>


        <div onclick='nextWriter()' class='w-nextButt' id='w-navButt'>

        </div>


</div>
