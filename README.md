# Meownime
Ini adalah tema wordpress fansub/fanshare meownime.

**Disclaimer:** ini bukan buatan saya, saya hanya mengedit sedikit dan membagikan secara gratis.

# Cara Install
Download reponya trus pasang bersamaan sama theme [Sparkling](https://github.com/ColorlibHQ/Sparkling), karena ini adalah child theme dari [Sparkling](https://github.com/ColorlibHQ/Sparkling).

# Rekomendai plugin

1. Wajib
	- [Metabox](https://wordpress.org/plugins/meta-box/)
	- [WP-PageNavi](https://wordpress.org/plugins/wp-pagenavi/)
2. Disarankan
	- Classic Editor
	- Classic Widget
	- [WP Dark Mode](https://wordpress.org/plugins/wp-dark-mode/) - disarankan pake ini jika pengen ada dark mode nya.

# Layout

Untuk global layout saya sarankan **Full Width**, cara settingnya ke **Customize-> Sparkling Options-> Layout Options-> Pilih Full Width**.

![Layout Options!](/img/Screenshot_2.png "Layout Options")

Untuk Post dan Page gunakan layout Right Sidebar. saat buat post pilih layout Right Sidebar seperti gambar dibawah.

![Post & Page Layout!](/img/PostLayout.png "Layout Options")

# Download box

```html
<div class="dlx">
<h4>[Judul Anime] Episode 01 — <strong>[Sumber]</strong></h4>
<table class="table table-striped">
<tbody>
<tr>
<td class="text-center">Mkv 480p (Softsub) — (79.09 MB)</td>
</tr>
<tr>
<td class="text-center"><a href="#" rel="noopener" target="_blank">Gdrive</a> | <a href="#" rel="noopener" target="_blank">Mediafire</a> | <a href="#" rel="noopener" target="_blank">Mirror</a></td>
</tr>
</tbody>
</table>
</div>
```
**Hasil**

![Download box!](/img/Dlbox_2.png)

![Download box!](/img/dlbox.png)

# Anime list, Ongoing List, Movie List, dll

![List!](/img/list.png)

Animelist hanya menampilkan anime denan status **Ongoing**. Cara menampilkanya di page cukup gunakan shortcode dibawah.

**Anime List**

```
[complete]
```

**Ongoing list**

```
[ongoing]
```

**Movie list**

```
[movie]
```

**Jadwal Rilis**

```
[jadwal]
```

**Genre list**

```
[genre]
```
