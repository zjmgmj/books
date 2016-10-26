var books = new Vue({
	el:'#books',
	data:{
		books:[{
			url:'/213',
			img:'images/2.jpg',
			name:'test',
			dsc:'testtesttesttesttest'
		},{
			url:'',
			img:'images/2.jpg',
			name:'test',
			dsc:'testtesttesttesttest'
		},{
			url:'',
			img:'images/2.jpg',
			name:'test',
			dsc:'testtesttesttesttest'
		},{
			url:'',
			img:'images/2.jpg',
			name:'test',
			dsc:'testtesttesttesttest'
		},{
			url:'',
			img:'images/2.jpg',
			name:'test',
			dsc:'testtesttesttesttest'
		},{
			url:'',
			img:'images/2.jpg',
			name:'test',
			dsc:'testtesttesttesttest'
		}]
	}
});

var swiperH = new Swiper('.swiper-container-h', {
	pagination: '.swiper-pagination-h',
	paginationClickable: true,
	spaceBetween: 50
});
var swiperV = new Swiper('.swiper-container-v', {
	pagination: '.swiper-pagination-v',
	paginationClickable: true,
	direction: 'vertical',
	spaceBetween: 50
});