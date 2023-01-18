# SabrehavenWwwLibriaryWorker

This is the static WWW library implementation based on cipsoft tibia/tfs resources written with the C#. It converts cipsoft original format of items.srv, .npcs files and monsters.xml of TFS to php static content library. Undoubtedly this tool was made just because of lack of knowledge of working with php but it does great job in the end.

To generate the www library based on your server resources you will have to simply configure several constants at the program.cs file, run the program and wait until it executes and prints hello world for you. 

The item.php, monster.php and npc.php are the template files based on those files the library will be generated.

The output is php files which are generated at ...\SabrehavenWwwLibriaryWorker\SabrehavenWwwLibriaryWorker\bin\Debug\netcoreapp2.2 folder.

The example of the generated library can be found in the Example folder. I also used strange way to draw the table of contents. For example, items.php has array of $files and $names object which I copy/pasted from my generated variable of ItemService.cs line 147-148. This library is designed to be used with ZnoteAAC but I bet that Znote would laugh from this php implementation :D 

Also, it has a little code snippet in program.cs to generate json for otclient market.

# Generated Examples
![image](https://user-images.githubusercontent.com/33052216/213216007-83599eab-173d-466f-a2ed-ce277234ab04.png)
![image](https://user-images.githubusercontent.com/33052216/213216425-bcff82f6-59e0-44c2-811c-9a064a5861dd.png)
![image](https://user-images.githubusercontent.com/33052216/213216638-1ef9c741-3162-4abc-abf6-db40d1ac2f2b.png)
