{"filter":false,"title":"errors.blade.php","tooltip":"/cms/resources/views/common/errors.blade.php","undoManager":{"mark":8,"position":8,"stack":[[{"start":{"row":0,"column":0},"end":{"row":9,"column":6},"action":"insert","lines":["@if (count($errors) > 0)","    <!-- Form Error List -->","<div class=\"alert alert-danger\"> <strong>入力した文字を修正してください。</strong>","<br><br>","        <ul>","            @foreach ($errors->all() as $error)","                <li>{{ $error }}</li>","            @endforeach","</ul> </div>","@endif"],"id":1}],[{"start":{"row":8,"column":6},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":8},"action":"remove","lines":["    "],"id":3}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "],"id":4}],[{"start":{"row":2,"column":67},"end":{"row":3,"column":0},"action":"remove","lines":["",""],"id":5}],[{"start":{"row":2,"column":54},"end":{"row":2,"column":55},"action":"remove","lines":["゙"],"id":6}],[{"start":{"row":2,"column":53},"end":{"row":2,"column":54},"action":"remove","lines":["た"],"id":7}],[{"start":{"row":2,"column":52},"end":{"row":2,"column":53},"action":"remove","lines":["く"],"id":8}],[{"start":{"row":2,"column":52},"end":{"row":2,"column":54},"action":"insert","lines":["くだ"],"id":14}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":2,"column":54},"end":{"row":2,"column":54},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1498707907977,"hash":"0baf44b908f2f27cdada9ea9ba3037907cd4ea90"}