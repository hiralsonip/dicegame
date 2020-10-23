<style>
.roll
{
    font-size:22px;
}

</style>


<a href="javascript:void(0)" onclick="roll()" class="roll">Roll</a>

<div id="result">
    
</div>

<script>

function roll()
{
    document.getElementById('result').innerHTML = "<img src='images/preview2.gif' >";
    setTimeout(function() 
    {
        var rand=Math.floor(Math.random()*6)+1;
        document.getElementById('result').innerHTML = "<img src='images/"+rand+".png' width='300' height='300'>";
        console.log(rand);
    }, 4000);
    
}

</script>