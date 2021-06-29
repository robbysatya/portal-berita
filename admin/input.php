<html>
    <head>
        <title>Input Artikel</title>
    </head>
<body>
<h2>Masukkan Artikel</h2>  
   <form class="form-horizontal" method="post" action="save.php" name="frmBerita" enctype="multipart/form-data">  
       
       <div class="control-group">  
    <label class="control-label" for="inputJudul">ID</label>  
    <div class="controls">  
    
           </div>  
   </div>
       
   <div class="control-group">  
    <label class="control-label" for="inputJudul">Judul</label>  
    <div class="controls">  
     <input type="text" class="span12" placeholder="Judul Berita" name="judul" required >  <br><br>
    </div>  
   </div>
    
           <div class="control-group">  
    <label class="control-label" for="inputJudul">Tanggal</label>  
    <div class="controls">  
     <input type="date" class="span12" placeholder="Tanggal" name="tanggal" required >  <br><br>
    </div>  
   </div>
       
    <div class="control-group">  
    <label class="control-label" for="inputJudul">Penulis</label>  
    <div class="controls">  
     <input type="text" class="span12" placeholder="Penulis" name="penulis" required >  <br><br>
    </div>  
   </div>
       
   <div class="control-group">  
    <label class="control-label" for="inputIsiBerita">Isi Berita</label>  
    <div class="controls">  
     <textarea rows="10" cols="70" class="span12" name="isi" required></textarea>  <br> <br>
       </div>  
   </div>
       
   <div class="control-group">  
    <label class="control-label" for="inputGambar">Gambar Berita</label> <br> 
    <div class="controls">  
     <input type="file" id="inputGambar" name="img" required> 
    </div>  
   </div>
       
   <div class="control-group">  
    <div class="controls">  
     <button type="submit" class="btn btn-primary" name="ttambah">Post</button>  
     <button type="reset" class="btn btn-inverse">Cancel</button>  
    </div>  
   </div>  
</form>
    </body>
</html>