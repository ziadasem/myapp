import 'package:flutter/material.dart' ;
import './text.dart' ;

class textManger extends StatefulWidget {
   int textt = 0 ;
  textManger(this.textt);

 @override
State<StatefulWidget> createState() {
 return _textMangerState();
 }
}

class _textMangerState extends State<textManger>{

@override
void initState(){
//_product.add(widget.startProduct);
super.initState();
}
  Widget build(BuildContext buildContext) {     
      return Column( children: <Widget>[
      text(widget.textt),
      RaisedButton (   
       onPressed : (){ 
         setState(() {
         widget.textt ++ ;
         });
       } ,
      child : Text('Change'),
      )//button
      ]);

 }} //end class and build 
