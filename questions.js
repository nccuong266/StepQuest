var questions = [];

var rawFile = new XMLHttpRequest();
rawFile.open("GET", "kham-pha-Van-Hoa-Muong.trealet.txt", false);
rawFile.onreadystatechange = function ()
{
  if(rawFile.readyState === 4)
  {
    if(rawFile.status === 200 || rawFile.status == 0)
    {
      var allText = rawFile.responseText;
      var obj = JSON.parse(allText);
      var stt = 0;
      document.getElementById("que_title").innerHTML = obj.trealet.title;
      document.getElementById("que_desc").innerHTML = obj.trealet.desc;
      obj.trealet.steps.forEach(function(item){
        if(item.type == "Quiz1"){
          stt++;
          questions.push({
            numb: stt,
            question: item.question,
            answer: item['option'+item.answer],
            options: [
              item.option1,
              item.option2,
              item.option3,
              item.option4
            ]
          });
        }
      });
    }
  }
}
rawFile.send(null);