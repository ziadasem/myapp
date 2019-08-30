import 'package:flutter/material.dart';
import './textManger.dart' ;
void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Flutter Demo',
      theme: ThemeData(
        primarySwatch: Colors.blue,
      ),
      home: Scaffold(
      appBar:  AppBar(      //main widget contains app bar
      title: Text('Text Viewer'), //tittle with widget text
       ),
      body : textManger(0),
    )
    );
  }
}
