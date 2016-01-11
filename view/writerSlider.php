
<div class='writerSlider'>


        <div onclick='prevWriter()' class='w-prevButt' id='w-navButt'>

        </div>


          <div class='w-sliderContent'>

            <ul id='writerList' class='writerList'>

            <script type='text/javascript'>

            // writer array [

            writerArray = [
              ['img/man.jpg','Filankəs Filankəsov','https://github.com/orkhanfarmanli', 'sample text for the writer text for the writer text for the writer news'],
              ['img/man.jpg','Filankəs Filankəsov','https://github.com/orkhanfarmanli', 'sample text for the writer news'],
              ['img/man.jpg','Filankəs Filankəsov','https://github.com/orkhanfarmanli', 'sample text for the writer news'],
              ['img/man.jpg','Filankəs Filankəsov','https://github.com/orkhanfarmanli', 'sample text for the writer news'],
              ['img/man.jpg','Filankəs Filankəsov','https://github.com/orkhanfarmanli', 'sample text for the writer news'],
              ['img/man.jpg','Filankəs Filankəsov','https://github.com/orkhanfarmanli', 'sample text for the writer news'],
              ['img/man.jpg','Filankəs Filankəsov','https://github.com/orkhanfarmanli', 'sample text for the writer news'],
              ['img/man.jpg','Filankəs Filankəsov','https://github.com/orkhanfarmanli', 'sample text for the writer news'],
              ['img/man.jpg','Filankəs Filankəsov','https://github.com/orkhanfarmanli', 'sample text for the writer news'],
              ['img/man.jpg','Filankəs Filankəsov','https://github.com/orkhanfarmanli', 'sample text for the writer news'],
              ['img/man.jpg','Filankəs Filankəsov','https://github.com/orkhanfarmanli', 'sample text for the writer news'],
              ['img/man.jpg','Filankəs Filankəsov','https://github.com/orkhanfarmanli', 'sample text for the writer news']
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

                          writerImgDiv = document.createElement('DIV');
                          writerImgDiv.className = 'writerImgDiv';

                          writerImg = document.createElement('img');
                          writerImg.src = writerArray[i][0];
                          writerImgDiv.appendChild(writerImg);

                  // writer img end

                  // writer description < >


                          writerDescDiv = document.createElement('DIV');
                          writerDescDiv.className = 'writerDescDiv';

                          // writer news header div < >

                          writerHeaderDiv = document.createElement('DIV');
                          writerHeaderDiv.className = 'writerHeaderDiv';
                          writerDescDiv.appendChild(writerHeaderDiv);

                          // writer news header div </>

                          // writer name div < >

                          writerNameDiv = document.createElement('DIV');
                          writerNameDiv.className = 'writerNameDiv';
                          writerDescDiv.appendChild(writerNameDiv);

                          // writer name div </>


                    // writer news header < >

                          writerHeader = document.createElement('span');
                          writerHeaderText = document.createTextNode(writerArray[i][3]);
                          writerHeader.appendChild(writerHeaderText);

                    // writer news header </>

                    // writer name div < >

                          writerName = document.createElement('span');
                          writerNameText = document.createTextNode(writerArray[i][1]);
                          writerName.appendChild(writerNameText);

                    // writer name div </>


                  // writer description </>

                          writerHeaderDiv.appendChild(writerHeader);
                          writerNameDiv.appendChild(writerName);

                          writerLink.appendChild(writerImgDiv);
                          writerLink.appendChild(writerDescDiv);
                          writerBox.appendChild(writerLink);
                          writerList.appendChild(writerBox);

                    // writer box end

                  }

            // writer box creation end


            // next writer function

            var count = 0;


            function nextWriter(){

              count-=240;


              if (count<(4-writerArray.length)*240) {

                    count = 0;

                  }


              writerList.style.transition = '0.6s all ease';

              writerList.style.transform = 'translateX('+count+'px)';


          }

            function prevWriter(){

              count+=240;


              if (count==240) {

                  count = (4-writerArray.length)*240;

                  }


                console.log(count);

              writerList.style.transition = '0.6s all ease';

              writerList.style.transform = 'translateX('+count+'px)';


            }

            </script>

            </ul>

          </div>


        <div onclick='nextWriter()' class='w-nextButt' id='w-navButt'>

        </div>


</div>
