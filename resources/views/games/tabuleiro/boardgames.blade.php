<script src="style.css"></script>
  <div style="width:440px; height:440px ">
        @for ($j = 0; $j<8; $j++)
        @for ($i = 0; $i<8; $i++)
        @if ($i % 2 == $j % 2)
        <div style="background-color:black; width:{{440/8}}px; height:{{440/8}}px; display:inline-block; border:0; font-size:0; float:left;"></div>
        @else
        <div style="background-color:gray; width:{{440/8}}px; height:{{440/8}}px; display:inline-block; border:0; font-size:0; float:left;"></div>
        @endif
        @endfor
        @endfor
  </div>