import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

class HomePage extends StatelessWidget {
  const HomePage({
    Key? key,
  }) : super(key: key);

  final String url = 'http://127.0.0.1:8000/api/companies';

  Future getCompanies() async {
    var response = await http.get(Uri.parse(url));
    print(json.decode(response.body));
    return json.decode(response.body);
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          title: Text('Aslan Asilon'),
        ),
        body: Builder(builder: (context) {
          return FutureBuilder(
              future: getCompanies(),
              builder: (context, snapshot) {
                if (snapshot.hasData) {
                  return Text('Data OK');
                } else {
                  return Text('Data Not OK');
                }
              });
        }));
  }
}
