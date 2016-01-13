<body>
    <!--the header blue div box-->    
    <div id="header_surf"> 
        <div>
            <a href="surf.php"><span id ="title"> Surf ~ Ace</span></a>
        </div>
        <br/>
        
       <div id = "logout_btn">     
       <?php print("<span id = 'username'>".$_SESSION["username"]."</span>"); ?>
       <a href="logout.php"><button type="submit" class="btn btn-default">Logout</button></a>
       
       
       </div>
            
       
       
       
        
    </div>
    
    <br/>
    <br/>
    
    <!--The horizontal navigation bar-->
    <div class="list">
            
            <div class="bs-example">
    <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        
        
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active list_element"><a href="#">Home</a></li>
                 <?php
	                foreach ($navnames as $navname)	//navbar names 
                    {   
                        
                        print("<li class='list_element'><a href='#'>" . $navname["navname"]. "</a></li>");
                        
                     
                    }
                ?>
                <li class='list_element'><a href='#' id='nav'></a></li>
                
            </ul>
            
            <div class="input-group" id="navform">
                    <input type="text" class="form-control" id="navname" placeholder="name">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button" onclick="addnavname($('#navname').val())">Add</button>
                    </span>
           </div><!-- /input-group -->
                        
            
       
       
        </div>
    </nav>
 </div>

       
    </div>
    
    <div class="row">

    
    <div class='col-md-2'>
    <div class="menu">
      <!-- Menu -->
                   
                   
           <div class="input-group" id="pillform">
                    <input type="text" class="form-control" id="pillname" placeholder="name">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button" onclick="addpillname($('#pillname').val())">Add</button>
                    </span>
           </div><!-- /input-group -->
            
            <br/>              
            
        <ul class="nav nav-pills nav-stacked">
       
            
            <?php
	                foreach ($pillnames as $pillname)	//navbar names 
                    {   
                        
                        print("<li class='menu_element'><a href='#'>" . $pillname["pillname"] . "</a></li>");
                     
                    }
             ?>
            
            <li class='menu_element'><a href='#' id='pill'></a></li>
         
        </ul>
    </div>
    </div>  
  
    <div class="col-md-10">
    <div class="jumbotron">
    
       <div id = "divbar">
        <div class="bar_content">
        
        <div id="home">
           <b>Tips : </b> For adding frame click <span class='glyphicon glyphicon-unchecked '></span>
           <br/>
            <br/>
                
                <form action="delnav.php" method="post">
    <fieldset>
        <div class="form-group dellink">
        Upper navigation links
            <select name="navname" class="form-control">
                <option value=''></option>
                <?php               
	                foreach ($navnames as $navname)	
                    {   
                       $navname = $navname["navname"];
                        print("<option value='$navname'>" . $navname . "</option>");
                    }
                ?>
            </select>
        </div>
        <div class="form-group dellink">
            <button type="submit" class="btn btn-default">Delete</button>
        </div>
    </fieldset>
</form>
            
            <form action="delpill.php" method="post">
    <fieldset>
        <div class="form-group dellink">
        Side navigation links
            <select name="pillname" class="form-control">
                <option value=''></option>
                <?php               
	                foreach ($pillnames as $pillname)	
                    {   
                       $pillname = $pillname["pillname"];
                        print("<option value='$pillname'>" . $pillname . "</option>");
                    }
                ?>
            </select>
        </div>
        <div class="form-group dellink">
            <button type="submit" class="btn btn-default">Delete</button>
        </div>
    </fieldset>
</form>
            
            
            
        </div>
        </div>
        <?php
	                    function textlink($text)
	                    {
	                        $length  = strlen($text);
	                        
	                        $flag = 0;
	                        
	                        $arrlink = array();
	                        
	                        $newlink = NULL;
	                        
	                        $count = 0;
	                        
	                        for( $i = 0; $i < $length; $i++)
	                        {
	                            if($text[$i] == '{')
	                            {
	                                $flag = 1;
	                            }
	                            
	                            else if($text[$i] == '}')
	                            {
	                                $flag = 0;
	                                $arrlink[$count] = $newlink;
	                                $count++;
	                                $newlink = NUlL;
	                            }
	                            else
	                            {
	                                $newlink = $newlink.$text[$i];
	                            }
	                        }
	                        
	                        return $arrlink;
	                    }
	                            
	                    
	                    
	                    foreach ($navnames as $navlink)	//navbar names 
                        {   
                            
                          
                        
                           print("<div class = 'bar_content'>");
                           print("<div class='input-group divlink'>");
                           print(" <input type='text' class='form-control url_bar' placeholder='link'>");
                           print("<span class='input-group-btn'>");
                           print("<button class='btn btn-default'  type='button'>Add Link</button>");
                           print("</span>");
                           print("</div>");
                           
                            $links = textlink($navlink["navlink"]);
                            
                            foreach($links as $link)
                            {
                                print("<br/>");
                                print("<div class = 'crossdiv'>");
                                print("<a href = '#' class= 'framesymbol'><span class='glyphicon glyphicon-unchecked '></span></a>");
                               
                                print("<a href = '".$link."' class = 'link' target='_blank'>".$link."</a>");
                                print("<a href = '#' class= ' cross navcross'><span class='glyphicon glyphicon-remove-circle '></span></a>");
                                 print("<div class='frameDiv' ></div>");
                                print("</div>");
                                
                            }
                            
                            print("</div>");
                                                 
                        }
                    ?>
        
        </div>
        
        <div id = "divpill">

            
             <?php
	                
	                foreach ($pillnames as $pillink)	//navbar names 
                    {   
                        
                       print("<div class = 'pill_content'>");
                       print("<div class='input-group divlink'>");
                           print(" <input type='text' class='form-control url_pill' placeholder='link'>");
                           print("<span class='input-group-btn'>");
                           print("<button class='btn btn-default' type='button'>Add Link</button>");
                           print("</span>");
                           print("</div>");
                        
                        $links = textlink($pillink["pill_link"]);
                        
                        foreach($links as $link)
                        {
                            print("<br/>");
                            print("<div class = 'crossdiv'>");
                            print("<a href = '#' class= 'framesymbol'><span class='glyphicon glyphicon-unchecked '></span></a>");
                               
                            print("<a href = '#' class = 'link'>".$link."</a>");
                            print("<a href = '#' class = ' cross pillcross '><span class='glyphicon glyphicon-remove-circle '></span></a>");
                            print("<div class='frameDiv' ></div>");
                            print("</div>");                        
                        }
                        
                        print("</div>");
                                             
                    }
                ?>
        
        
        </div>
       
      
        
    </div> <!--closes jumbotron div-->
    </div> <!--closes the #col-md-10 div-->
    
    </div> <!--closex the #row dix-->
    
    

