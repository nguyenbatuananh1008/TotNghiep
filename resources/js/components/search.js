import typeahead from "typeahead.js";
import Bloodhound from "bloodhound-js";
var Search = {
	init : function () {
		this.getKeywordSearch();
		this.suggestSearch();
		this.authAppendKeywordToSidebar();
		this.appendKeywordFrom()
	},

	suggestSearch()
	{
		var engine1 = new Bloodhound({
			remote: {
				url: '/ajax/article/search?value=%QUERY%',
				wildcard: '%QUERY%'
			},
			datumTokenizer: Bloodhound.tokenizers.whitespace('value'),
			queryTokenizer: Bloodhound.tokenizers.whitespace
		});

		$(".js-input-search").typeahead({
			hint: true,
			highlight: true,
			minLength: 1
		}, [
			{
				source: engine1.ttAdapter(),
				name: 'students-name',
				display: function(data) {
					return data.name;
				},
				templates: {
					empty: [
						'<div class="list-group search-results-dropdown"><div class="list-group-item">Dữ liệu đang được cập nhật.</div></div>'
					],
					// header: [
					// 	'<div class="title">Sản phẩm được tìm thấy</div><div class="list-group search-results-dropdown"></div>'
					// ],
					suggestion: function (data) {
						return '<div class="item">\n' +
							'        <div class="item_info">\n' +
							'            <a href="'+data.link+'">'+data.name+'</a>\n' +
							'        </div>\n' +
							'    </div>';
					}
				}
			},
		]);

	},

	formatNumber(n)
	{
		return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
	},

	getKeywordSearch()
	{
		let _this = this;
		$('.js-input-search').keyup(function(e){
			let $this = $(this);
			if(e.keyCode === 13)
			{
				let keyword = $this.val().trim().toLowerCase();
				if (keyword.length) {
					_this.autoSaveKeywordSearch(keyword)
				}
			}
		});

		$('.js-btn-click-search').click( function (event) {
			let $this = $(this);
			let keyword = $this.prev().trim().toLowerCase();
			if (keyword.length) {
				_this.autoSaveKeywordSearch(keyword)
			}
		})
	},

	onlyUnique (value, index, self) {
		return self.indexOf(value) === index;
	},

	autoSaveKeywordSearch(keyword)
	{
		let listKeywordSearch = localStorage.getItem('list_keywords');
		if (listKeywordSearch === null) {
			listKeywordSearch = [];
		}else  {
			listKeywordSearch = $.parseJSON(listKeywordSearch);
		}

		listKeywordSearch.push(keyword);
		listKeywordSearch = Array.from(new Set(listKeywordSearch))
		if (listKeywordSearch.length === 11) {
			listKeywordSearch.shift();
		}
		localStorage.setItem('list_keywords',JSON.stringify(listKeywordSearch))
	},

	authAppendKeywordToSidebar()
	{
		let $boxSuggestKeyword = $("#suggest_keyword");
		let listKeywordSearch = localStorage.getItem('list_keywords');
		if (listKeywordSearch !== null && typeof $boxSuggestKeyword !== "undefined") {
			let dome = "<ul>";
			listKeywordSearch = $.parseJSON(listKeywordSearch);

			listKeywordSearch.forEach( function (key) {
				dome += `<li><a href='javascript:;void(0)' class="js-append-k-search">${key}</a></li>`
			})
			dome += "</ul>";
			$boxSuggestKeyword.append(dome);
		}
	},

	appendKeywordFrom()
	{
		$("body").on('click','.js-append-k-search',function (event) {
			let $this = $(this);
			let value = $this.text();
			let $input = $(".js-input-search");
			$input.val(value);
			$input.parents('form').submit();
		})
	}

}

export default Search;