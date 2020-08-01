<?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['id']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['id'] == 'admin' && 
                  $_POST['password'] == 'admin') {
                   session_start();
                  $_SESSION['valid'] = true;
                  
                  echo ("<script LANGUAGE='JavaScript'>
                    window.location.href='../admin.html';
                    </script>");
               }
                
                else if ($_POST['id'] == 'user' && 
                  $_POST['password'] == 'user') {
                   session_start();
                  $_SESSION['valid'] = true;
                  
                  echo ("<script LANGUAGE='JavaScript'>
                    window.location.href='../usage.html';
                    </script>");
               }
                 else {
                  echo ("<script LANGUAGE='JavaScript'>
		    alert('Wrong details.');
		    window.location.href='../login.html';
		    </script>");
               }
            }
         ?>
