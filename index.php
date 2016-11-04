<article>
  <header>
    <h3>iTunes Artwork Finder</h3>
    <form action="" method="get" accept-charset="utf-8" id="iTunesSearch">
      <select name="entity" id="entity">
        <option value="tvSeason">TV Show</option>
        <option value="movie">Movie</option>
        <option value="ebook">iBook</option>
        <option value="album">Album</option>
        <option value="software">App</option>
        <option value="audiobook">Audiobook</option>
        <option value="podcast">Podcast</option>
        <option value="musicVideo">Music Video (may not work)</option>
        <option value="id">Apple ID (Movie)</option>
        <option value="idAlbum">Apple ID (Album)</option>
        <option value="shortFilm">Short Film</option>
      </select>
      <input type="text" class="text" name="query" id="query" />
      <select name="country" id="country">
        <option value='us'>United States of America</option>
        <option value='gb'>United Kingdom</option>
      </select>
      <input type="submit" class="submit" value="Get the artwork" />
    </form>
  </header>

  <div id="results">

  </div>
</article>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="itunes.js"></script>
