jQuery(function($){
	$(window).on('load',function(){
		$(window).resize();
		$('#js_cover').show();
//        var BV = new $.BigVideo({
//            useFlashForFirefox:false,
//          
//        });
//        BV.init();
//        BV.show([
//            { type: "video/mp4",  src: "src/source.mp4" },
//            { type: "video/webm", src: "src/source.webm" },
//            { type: "video/ogg",  src: "src/source.ogv" }
//        ]);
	});

	$(document).ready(function(){  //ready Start

        $(window).resize();
		$('#Visual').removeClass('ready');
		
		
	});//ready End  

	(function(){      //start: Video Size Set--------------------------------------------------------

        $(window).resize(function(){    

            var win_w = $(window).width();
            var win_h = $(window).height();
            var video_w = $('#js_cover').width();//1920
            var video_h = $('#js_cover').height();//1080

            // console.log(video_w/video_h)

            if(win_w/win_h>video_w/video_h){
                // console.log('가로 100%')
                $('#js_cover').css({'width':'100%','height':'auto'});
            }else {
                // console.log('세로 100%')
                $('#js_cover').css({'width':'auto','height':'100%'});
            }
        });

    })();  //End: Video Size Set-----------------------------------------------------------------------

		if($(window).scrollTop()==0){
			$('.logo img').animate({height: '4rem'},1100);
			$('#full .biw').stop().css({left:'-400px'},0);
			$('.logo a').animate({padding:'0.5em 0'});
			$('.header').css({backgroundColor:'transparent'});
		}

		var width = [137.500,224.328,137.813,191.141,106.984,102.531]
		$('#full').fullpage({
//            dragAndMove:true,
			navigation:true,
			onLeave: function(index, nextIndex, direction){
				var i = nextIndex-1;
				switch(i) {
			        case 0 :
                        $('.header').css({backgroundColor:'transparent'});
                        $('.logo img').animate({height: '4rem'},1100);
                        $('.logo a').animate({padding:'0.5em 0'});
			        case 1 :
                        
			        case 2 :
                        $("#rotate").rotate({ 
                            bind: 
                                { 
                                mouseover : function() { 
                                    $(this).rotate({animateTo:180})
                                },
                                mouseout : function() { 
                                    $(this).rotate({animateTo:0})
                                }
                        } 

                        });
                        
			        case 3 :
			        case 4 :
			        case 5 :
                        
//			        $('#nav .text').css({width:0}).eq(i).animate({width:width[i]});
		            $('#nav a').eq(i).addClass('active').siblings().removeClass('active');
		            if(state==1)return false;
	//		        console.log(i);
			        break;

			     

			    }
	            
                
                //after leaving section 2
                if(index == 1 && direction =='down'){
                    $('.logo img').animate({height: '3rem'},1100);
                    $('.logo a').animate({padding:0});
                    $('.header').css({backgroundColor:'#0060aa'});
                    $('#full .biw').stop().animate({left:'2%'},1100);
                    $('.sec2_bg').stop().animate({left:'0'},1100);
//                    alert("Going to section 3!");
                }

                else if(index == 2 && direction == 'up'){
                    $('.logo img').animate({height: '4rem'},1100);
                    $('#full .biw').stop().css({left:'-400px'},0);
                    $('.logo a').animate({padding:'0.5em 0'});
                    $('.header').css({backgroundColor:'transparent'});
                    $('.sec2_bg').stop().animate({left:'-40%'},1100);
//                    alert("Going to section 1!");
                }
                
                if(index == 2 && direction =='down'){
//                    alert("Going to section 3!");
                }

                else if(index == 3 && direction == 'up'){
//                    clearInterval(angle);
//                    alert("Going to section 1!");
                }
                
				
			}
                
                
				

	    
		});
	    

		$('#nav a').click(function(){
	      var idx =$('#nav a').index($(this));
	      $('#nav a').eq(idx).addClass('active').siblings().removeClass('active');
	      $('#fp-nav a').eq(idx).trigger('click');
	    });

	  
		var state = 0;

		function pop (){

			state = 1;

			$('.modal').fadeIn();
			
		}

		function pop_close (){

			state = 0;

			$('.modal').fadeOut();
			

			// $('html, body').css({'overflow' : 'visible'});
		}
		$('.modal').on('click',function(){
			pop_close();
			$('#lightbox,#tab-wrap').fadeOut();
		});
		
		$('.section1,#Visual .box span').click(function(){

			pop();
			$('#lightbox').fadeIn();
            $('#Visual .box').animate({display:'none'});

			$('html, body').css({'overflow' : 'hidden'});
		});

		$('.close').click(function(){

			pop_close();
			$('#lightbox, #tab-wrap').fadeOut();
			

		});

		
		
		$('.more_box .frm').on('click',function(){ //click Start
				state = 1;
				pop();
				var idx = $('.section').index($(this));
				$('#tab-wrap').fadeIn();
				$('.tabs li').eq(idx).addClass('on').siblings().removeClass('on');
				$('.tab-content').eq(idx).addClass('on').siblings().removeClass('on');
				$('html, body').css({'overflow' : 'hidden'});
			    $('.tabs a').on('click',function(e){
			        var num = $('.tabs a').index($(this));
			        $('.tabs li').eq(num).addClass('on').siblings().removeClass('on');
			        $('.tab-content').eq(num).addClass('on').siblings().removeClass('on');
			        e.preventDefault();
			    });

			    $('.tabs a').on('mouseover',function(){
			       $(this).trigger('click'); 
			    });
				
		});//click End

    var mouse_move = setInterval(function(){

		$('.mouse').animate({bottom: '4%'},300,function(){
            $(this).animate({bottom:'2%'},300);
        });	
    },1000);

	$('.mouse').on('mouseover',function(){
		clearInterval(mouse_move);
	});    

    
 	
});//jQuery End